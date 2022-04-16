<?php
    namespace Gjun\Blog\Controller;

    class File {
        function upload($file){
            extract($file);
            if($name == ''){
                $fullname = null;
                return $fullname;
            }
            //自訂檔名
            $img_name = md5(time());
            //副檔名
            $ext = pathinfo($name,PATHINFO_EXTENSION);
            //完整名稱
            $fullname = $img_name.'.'.$ext;

            // $custom_name = $_REQUEST['name'];
            // if($_REQUEST['name'] == ''){
            //     $custom_name = $name;
            // }else{
            //     $custom_name = $_REQUEST['name'];
            // }
            
            //判斷圖片格式
            if($ext != 'jpg' &&$ext != 'jpeg' && $ext!='gif' && $ext!='png'){
                echo "<script>alert('請上傳正確的圖片格式');</script>";
                header('refresh:0;url=form.php');
                return ;
            }

            $uploadFolder = 'images';

            if(!is_dir($uploadFolder)){
                mkdir($uploadFolder);
            }

            $target = $uploadFolder.'/'.$fullname;

            

            switch($error){
                case 0:
                    if(move_uploaded_file($tmp_name,$target)){

                        return $fullname;
                        echo '上傳成功';
                        header('refresh:1;url=index.php');
                    }else{
                        echo '上傳失敗';
                    }
                    
                    break;
                case 1:
                    echo '上傳檔案過大(伺服器設定)';
                    break;
                case 2:
                    echo '上傳檔案過大(表單設定)';
                    break;
                case 3:
                    echo '只有部分上傳';
                    break;
                case 4:
                    echo '請選擇檔案';
                    break;            
                case 6:
                    echo '遺失暫存資料夾';
                    break;
                case 7:
                    echo '檔案無法寫入';
                    break;
                case 8:
                    echo '不支援檔案上傳';
                    break;
            }
        }
        function delete($path){
            unlink($path);
        }
    }