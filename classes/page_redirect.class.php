<?php
class page_redirect
{
    //Page Redirect method
    public function redirect_page($link)
    {
         
        echo '<script>window.location.href="'.$link.'"</script>'; 
        exit();

    }

  
}

?>
