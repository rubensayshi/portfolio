Options -Indexes
Options +FollowSymLinks
Options -Multiviews

ErrorDocument 404 /

DirectoryIndex index.php index.html index.htm

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php [QSA,L]
