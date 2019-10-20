<?php
    include '../inc/config.php';

    if(isset($_POST["id_news"])) {
        $output = '';
        $query = "SELECT * FROM news WHERE id_news = '".$_POST["id_news"]."'";
        $result = mysqli_query($mysqli, $query);
        $output .= '
            <div class="table-responsive">
                <table class="table table-bordered">';

                while($data = mysqli_fetch_array($result)) {
                    $output .= '
                    <tr>
                        <td width="30%"><label>Title</label></td>  
                        <td width="70%">'.$data["title_news"].'</td>  
                    </tr>
                    <tr>  
                        <td width="30%"><label>Description</label></td>  
                        <td width="70%">'.$data["description"].'</td>  
                    </tr>
                    <tr>  
                        <td width="30%"><label>Date</label></td>  
                        <td width="70%">'.$data["date_news"].'</td>  
                    </tr>
                    ';
                }            
        $output .= '</table></div>';
        echo $output;
    }
?>