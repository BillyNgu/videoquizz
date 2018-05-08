<?php ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">VidéoQuizz</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <?php if (!empty($index)): ?>
                    <a class="nav-link active" href="#">Accueil</a>
                <?php else: ?>
                    <a class="nav-link" href="index.php">Accueil</a>
                <?php endif; ?>
            </li>
            <li class="nav-item">
                <?php if (!empty($register)): ?>
                <a class="nav-link active" href="#">Inscription</a>
                <?php else: ?>
                <a class="nav-link" href="register.php">Inscription</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</nav>
