
<?php 
require_once './index.php';
$categories = get_categories();
?>
<aside>
    <form method="post" action="">
        <ul>
            <?php foreach ($categories as $category) : ?>
             <li><a href="?action=<?php echo strtolower($category['category_name']); ?>">
                                  <?php echo $category['category_name']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </form>
</aside>
