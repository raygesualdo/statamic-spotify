<?php
/**
 * Plugin_spotify
 * Embeds Spotify playlists
 *
 * @author  Ray Gesualdo <ray@rjgesualdo.com>
 * @link    https://github.com/raygesualdo/statamic-spotify
 */
 
class Plugin_spotify extends Plugin 
{    
    // Metadata
    var $meta = array(
        'name'       => 'Spotify Playlist',
        'version'    => '0.1',
        'author'     => 'Ray Gesualdo',
        'author_url' => 'http://rjgesualdo.com'
    );    

    /**
     * Index function
     * 
     * The function uses the passed "URI" parameter to 
	 * build the playlist embed code.
     *    
     * @return string
     */
    public function index() 
    {
        $uri  = $this->fetchParam('uri', false, null, false, false);
        
        if (!$uri)
        {
            return NULL;
        }

        return '<iframe src="https://embed.spotify.com/?uri='.$uri.'" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
        
    }
}