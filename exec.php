<?php

// Page créé par Shepard [Fabian Pijcke] <Shepard8@laposte.net>
// et Romain Bourdon <romain@anaska.com>
// pour WAMP5 


//afficher phpinfo

/*
if(!exec("tar -xvf backupspringhill_090311.tgz")){
 echo "Error"   ;
}
*/

//if(!exec("find . -type d -exec chmod 755 {} \;")){

if(!exec("zip -r bkp_".date("Y_m_d_h_i_s").".zip shell")){
    echo "Error" ;
}

/*
if(!exec("unzip images_pure.zip")){
    echo "Error" ;
}
*/
?>