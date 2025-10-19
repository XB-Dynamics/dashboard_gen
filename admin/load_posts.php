<!-- في قسم Pagination -->
<div class="pagination">
    <?php if ($page > 1): ?>
        <a href="?page=<?= $page - 1 ?>" class="page-link">
            <i class="fas fa-arrow-right"></i> السابق
        </a>
    <?php endif; ?>
    
    <?php 
    // عرض أرقام الصفحات بشكل ذكي
    $startPage = max(1, $page - 2);
    $endPage = min($totalPages, $page + 2);
    
    if ($startPage > 1) {
        echo '<a href="?page=1" class="page-link">1</a>';
        if ($startPage > 2) {
            echo '<span class="page-dots">...</span>';
        }
    }
    
    for ($i = $startPage; $i <= $endPage; $i++): ?>
        <a href="?page=<?= $i ?>" class="page-link <?= $i == $page ? 'active' : '' ?>">
            <?= $i ?>
        </a>
    <?php endfor; ?>
    
    <?php if ($endPage < $totalPages): ?>
        if ($endPage < $totalPages - 1) {
            echo '<span class="page-dots">...</span>';
        }
        echo '<a href="?page='.$totalPages.'" class="page-link">'.$totalPages.'</a>';
    <?php endif; ?>
    
    <?php if ($page < $totalPages): ?>
        <a href="?page=<?= $page + 1 ?>" class="page-link">
            التالي <i class="fas fa-arrow-left"></i>
        </a>
    <?php endif; ?>
</div>