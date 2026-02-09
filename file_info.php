<?php

/*$filename = "test.txt";

if(file_exists($filename)){

    echo "Size: ".filesize($filename)."<br>";
    echo "Type: ".filetype($filename)."<br>";

    echo "Created: ".date("d-m-Y H:i:s", filectime($filename))."<br>";
    echo "Modified: ".date("d-m-Y H:i:s", filemtime($filename))."<br>";
    echo "Accessed: ".date("d-m-Y H:i:s", fileatime($filename))."<br>";

    echo "<hr>";

    echo file_get_contents($filename);

} else {
    echo "File not found";
}*/

/*$filename="test.txt";
$perms=fileperms($filename);
echo "Permissions: ".substr(sprintf('%o', $perms), -4)."<br>";
*/
#owner
echo "Owner ID: ".fileowner("test.txt")."<br>";
#group
echo "Group ID: ".filegroup("test.txt")."<br>";
#inode
echo "Inode: ".fileinode("test.txt")."<br>";
#copy
copy("test.txt","copy_test.txt");
echo "File copied successfully.<br>";
#rename
rename("copy_test.txt","renamed_test.txt");
echo "File renamed successfully.<br>";
#delete
unlink("renamed_test.txt");
echo "File deleted successfully.<br>";
#create directory
mkdir("new_folder");
echo "Directory created successfully.<br>";
#remove directory
rmdir("new_folder");
echo "Directory removed successfully.<br>";
#check if it's a file
if(is_file("test.txt")){
    echo "test.txt is a file.<br>";
}
#check if it's a directory
if(is_dir("new_folder")) { 
    echo "it is a directory.<br>";
}
#scandir
$files=scandir(".");
print_r($files);
?>