<?php require "misc/header.php"; ?>

    <title>Blocus</title>
    </head>
    <body>
        <form class="search-container" action="search.php" method="get" autocomplete="off">
                <h1><span class="bl">Bl</span>oc<span class="X">us</span></h1><br/>
                <input type="text" name="q" autofocus/>
                <input type="hidden" name="p" value="0"/>
                <input type="hidden" name="t" value="0"/>
                <input type="submit" class="hide"/>
                <div class="search-button-wrapper">
                    <button name="t" value="0" type="submit">Search</button>
                    <button name="t" value="3" type="submit">Search torrents</button>
                </div>

        </form>


<?php require "misc/footer.php"; ?>
