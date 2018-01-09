<?php


/***
 * Voici un example de comment faire pour créer une clé public et un clé privée:
 */

/**
 * Array de configuration:
 */

$config = array(
    'digest_alg'=>'sha512',
    'private_key_bits'=>1024,
    'private_key_type'=> OPENSSL_KEYTYPE_RSA
);

/**
 * Processus aléatoire de génération du pack
 */

$pack = openssl_pkey_new($config);

/**
 * Exportation de la clé privé à partir du pack
 * et de la clé public ensuite
 */

openssl_pkey_export($pack, $privKey);

$pubKey = openssl_pkey_get_details($pack);
$pubKey = $pubKey["key"];

/**
 * Transaction que l'on veut faire
 */
$transfer = "T1.00000000_1PoZ8dFbS8HFy22zZPTGBbNUQeG3VuhmTr";


/**
 * Encrypt par l'émetteur
 */
openssl_private_encrypt($transfer,$crypted,$privKey);

/**
 * Decrypt par le réseau
 */

openssl_public_decrypt($crypted,$decrypted,$pubKey);

var_dump($decrypted);


die();