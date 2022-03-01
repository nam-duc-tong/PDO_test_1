<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'unitop';
    // set DSN
    $dsn = 'mysql:host='.$host.';dbname='.$dbname;

    // create a pdo instance
    $pdo = new PDO($dsn,$user,$password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    // #pdo query
    // $stmt = $pdo->query('SELECT * FROM pdopost');
    // while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     echo $row['body'].'<br>';
    // }
    // unsafe 
    // $sql = "SELECT * FROM posts WHERE author = '$author'";

    // fetch multiple posts
    // user input

    $author = 'author';
    $is_published = true;
    $id = 1;
    // positional params

    // $sql = 'SELECT * FROM pdopost WHERE author = ?';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$author]);
    // $posts = $stmt->fetchAll();

    // echo '<pre>';
    // var_dump($posts);
    // echo '</pre>';


    // $sql = 'SELECT * FROM pdopost WHERE author = :author && is_published = :is_published';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['author' => $author,'is_published'=>$is_published]);
    // $posts = $stmt->fetchAll();

    // foreach($posts as $post)
    // {
    //     echo $post->body.'<br>';
    // }

    // Fetch single post

    // $sql = 'SELECT * FROM pdopost WHERE id=:id';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['id'=>$id]);
    // $post = $stmt->fetch();



    // GEt Row count
    // $stmt = $pdo->prepare('SELECT * FROM pdopost WHERE author = ?');
    // $stmt->execute([$author]);
    // $postCount = $stmt->rowCount();
    // echo $postCount;

    // insert
    // $title = 'POST Five';
    // $body = 'This is post five';
    // $author = 'Kelvin';

    // $sql = 'INSERT INTO pdopost(title,body,author) VALUES (:title,:body,:author)';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['title'=>$title,'body'=>$body,'author'=>$author]);
    // echo 'Post Added';

    // update data
    // $id = 2;
    // $body = 'This is the updated post two';

    // $sql = 'UPDATE pdopost SET body = :body WHERE id = :id';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['body'=>$body,'id'=>$id]);
    // echo 'POST Updated';
    

    // DELETE data
    // $id = 3;
    // $sql = 'DELETE FROM pdopost WHERE id = :id';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['id'=>$id]);
    // echo 'POST DELETED';

    // SEARCH data
        $search = "%One%";
        $sql = 'SELECT * FROM pdopost WHERE title LIKE ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$search]);
        $posts = $stmt->fetchAll();
        foreach($posts as $post)
        {
            echo $post->title.'<br>';
        }

?>

<h1><?php //echo $post->title;?></h1>
<p><?php //echo $post->body;?></p>