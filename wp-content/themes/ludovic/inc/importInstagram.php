<?php

    function get_instagram_thumbs() {
        $token  = "IGQVJWXzUwX3dqanYwVDBCak4zelp3ZA01XakkzZAG0zMWdoZAFFwbFFmaVBGS0ZATQW9tb05ZAcVpwZAnVrbWV2aDRrMHlDSlhlWlZAjclRpejN1cElwWlhlN25mMnFucC1CaWN4M3dYNVhtamFXX1NqX0duQwZDZD";
        $listImage = wp_remote_get('https://graph.instagram.com/me/media?fields=username,permalink,timestamp,media_url,caption&access_token=' . $token );

        $listImageArray = json_decode($listImage['body']);

        $listImageArrayData = $listImageArray->data;

        return $listImageArrayData;
    }

    function import_post_in_wp(){
    // On appelle les fonctionnalités WP
    $path = preg_replace('/wp-content(?!.*wp-content).*/','',__DIR__);

    include($path.'wp-load.php');

    if ( ! function_exists( 'media_handle_upload' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/image.php' );
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
        require_once( ABSPATH . 'wp-admin/includes/media.php' );
    }

    $usersItems = get_instagram_thumbs();

    //Parcours tous les posts instagram
    foreach ($usersItems as $usersItem):

        //var_dump($usersItem);
        // Stockage des datas d'un post instagram
        $titlePost = '';
        $linkPublication = '';
        $images = $usersItem->media_url;
        $imageID = $usersItem->id;
        $datePostTimestamp = $usersItem->timestamp;
        //$datePostTimestamp = date('Y-m-d', $datePostTimestamp);

        //var_dump($usersItem->timestamp); die;

        if(isset($usersItem->permalink)):
            $linkPublication = $usersItem->permalink;
        endif;


        // Check si du texte est renseigné pour s'en servire comme titre dans le BO à l'enregistrement du nouveau poste
        if(isset($usersItem->caption)):
            $titlePost = $usersItem->caption;
        endif;
        $titlePost = substr($titlePost, 0, 70);


        // Recupère tous les posts qui on comme valeur du champs ACF 'post_instagram_id' l'id du post renvoyé par l'API pour ne pas dupliquer
        $posts = get_posts(array(
            'numberposts'	=> -1,
            'post_type'		=> 'instagram',
            'meta_key'		=> 'post_instagram_id',
            'meta_value'	=> $imageID,
            'post_status' => 'any',
        ));


        // Si aucun post n'a le meme ID cela veut dire que le poste n'a jamais été importé. Nous l'importons
        if(empty($posts)):

            // On prépare le nouveau post qui sera stocker dans le post type "instagram"
            $argsNewPost = array(
                'post_type' => 'instagram',
                'post_name' => $titlePost,
                'post_title' => $titlePost,
                'post_status' => (strpos($images, '.jpg'))? 'publish' : 'draft',
                'post_date' => $datePostTimestamp
            );

            // On insert le post dans le CPT "instagram"
            $newPost = wp_insert_post($argsNewPost);

            $imageToStock = '';

            // On recupère la plus haute définition d'image du poste renvoyé par l'api


            // On import l'image dans la librairie d'uploads
            $mediaUploadIdWordpress = import_image($images, $newPost);

            // On update les champs ACF dans le post qu'on vient de créer
            update_field('post_instagram_id', $imageID, $newPost);
            update_field('image_instagram', $mediaUploadIdWordpress, $newPost);
            update_field('url_publication', $linkPublication, $newPost);
        endif;

    endforeach;

}

function import_image( $url, $post_id ) {

    // Fonction trouvée sur internet qui fonctionne alors débrouillez vous sans commentaire. =)
    $tmp = download_url( $url );

    $file_array = array();

    preg_match( '/[^\?]+\.(jpg|jpe|jpeg|gif|png|pdf)/i', $url, $matches );
    $file_array['name'] = basename( $matches[0] );
    $file_array['tmp_name'] = $tmp;

    if ( is_wp_error( $tmp ) ) {
        @unlink( $file_array['tmp_name'] );
        $file_array['tmp_name'] = '';
    }

    $id = media_handle_sideload( $file_array, $post_id, '' );

    if ( is_wp_error( $id ) ) {
        @unlink( $file_array['tmp_name'] );
        return $id;
    }
    update_post_meta( $id, 'old_url', $url );

    return $id;
}




//import_post_in_wp();






?>
