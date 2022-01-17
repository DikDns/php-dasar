<?php
    include "../function/functions.php";

    $keyword = $_GET["keyword"];

    $query = "SELECT * FROM videogames WHERE 
    title LIKE '%$keyword%' OR
    year LIKE '%$keyword%' OR
    developer LIKE '%$keyword%' OR
    platform LIKE '%$keyword%' OR
    genre LIKE '%$keyword%' OR
    mode LIKE '%$keyword%'
    ";

    $videogames = query($query);
    $videogames_db = query("SELECT * FROM videogames");
    if( isset($videogames[0]) ){
        $rowNum = array_search($videogames[0], $videogames_db) + 1;
        $_SESSION["page-active"] = ceil($rowNum / $dataPerPage);
        $dataFirst = 0;
    }
?>

<table class="table table-info table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Year</th>
            <th scope="col">Developer</th>
            <th scope="col">Platform</th>
            <th scope="col">Genre</th>
            <th scope="col">Mode</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1 + $dataFirst; foreach ($videogames as $row) : ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td>
                    <img class="img-thumbnail" src="img/<?= $row["image"] ?>" alt="<?= $row["title"] ?> Image">
                </td>
                <td><?= $row["title"] ?></td>
                <td><?= $row["year"] ?></td>
                <td><?= $row["developer"] ?></td>
                <td><?= $row["platform"] ?></td>
                <td><?= $row["genre"] ?></td>
                <td><?= $row["mode"] ?></td>
                <td style="display: none;" id="data-id"><?= $row["id"] ?></td>
            </tr>
        <?php  $i++; endforeach; ?>
    </tbody>
</table>

<br class="separator">

<ul class="pagination justify-content-center mb-0">

    <?php if ($_SESSION["page-active"] > 1) : ?>
        <li class="page-item">
            <a class="page-link fs-5" href="index.php?page=<?= $_SESSION["page-active"] - 1 ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
    <?php else : ?>
        <li class="page-item disabled">
            <a class="page-link fs-5" href="index.php?page=<?= $_SESSION["page-active"] - 1 ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
    <?php endif; ?>

    <?php
    ?>

    <?php

        if ($_SESSION["page-active"] > ($pageSummary - (floor($paginationCol / 2)))){
            $min = $pageSummary - ($paginationCol - 1);
            $max = $pageSummary;
        } else if ( $_SESSION["page-active"] > (floor($paginationCol / 2)) ){
            $min = $_SESSION["page-active"] - (floor($paginationCol / 2));
            $max = $_SESSION["page-active"] + (floor($paginationCol / 2));
        } else {
            $min = $paginationCol - ($paginationCol - 1);
            $max = $paginationCol;
        }
    ?>
    <?php for( $i = $min; $i <= $max; $i++ ) : ?>

        <?php if($i == $_SESSION["page-active"]) : ?>
            <li class="page-item active">
                <a class="page-link fs-5" href="index.php?page=<?= $i ?>"><?= $i ?></a>
            </li>
        <?php else : ?>
            <li class="page-item">
                <a class="page-link fs-5" href="index.php?page=<?= $i ?>"><?= $i ?></a>
            </li>
        <?php endif; ?>

    <?php endfor; ?>

    <?php if ($_SESSION["page-active"] < $pageSummary) : ?>
    <li class="page-item">
        <a class="page-link fs-5" href="index.php?page=<?= $_SESSION["page-active"] + 1 ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
    </li>
    <?php else : ?>
    <li class="page-item disabled">
        <a class="page-link fs-5" href="index.php?page=<?= $_SESSION["page-active"] + 1 ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
    </li>
    <?php endif; ?>


    </ul>