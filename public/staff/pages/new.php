<?php 
    require_once('../../../private/initialize.php'); 
    $page_title = 'Pages';
    include(SHARED_PATH . '/staff_header.php'); 

    if(is_post_request()){
        $menu_name = h($_POST['menu-name']);
        $position = h($_POST['position']);
        $visible = h($_POST['visible']);

        echo 'Form Parameters<br>';
        echo 'Menu Name: ' . $menu_name . '<br>';
        echo 'Position: ' . $position . '<br>';
        echo 'Visible: ' . $visible . '<br>';
    }

?>
<div id="content">
    <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

    <h2>New Page</h2>
    <form action="new.php" method="post">
        <label for="menu-name">Menu Name: </label>
        <input type="text" id="menu-name" name="menu-name"><br>
        <label for="position">Position: </label>
        <select id="position" name="position">
            <option value="1">1</option>
        </select><br>
        <label for="visible">Visible: </label>
        <input type="hidden" name="visible" value="0">
        <input type="checkbox" id="visible" name="visible" value="1"><br>
        <input type="submit" value="Create Page">
    </form>
</div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
