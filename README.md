## PHP code execution

If the server uses php and execution of php is not disabled for the uploads
directory then php code can be executed on the server just by uploading a php
file. this can be prevented by disallowing php execution on directory that
uploads are stored or by disallowing uploading of files with a .php extension

For example on apache php execution can be disabled for a directory by adding
something like the following to your apache config:

```
<Directory "/path/to/uploads/dir">
    php_admin_value engine off
</Directory>
```

## File Modification

If the server joins paths without escaping the filename then any file on the
system can be overwritten if the server was run as root, this method can be
used to create cron jobs. allowing the attacker to run any code on the server.

sending sever files with `/` in their names with curl:

```
curl --form 'file=@local_filename;filename=../test' http://127.0.0.1:5000/upload
```
