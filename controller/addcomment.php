<?php
if (isset($_POST['addComment'])) {
    if($loggedIn){
    $comment = $conn->real_escape_string($_POST['comment']);
    $isReply = $conn->real_escape_string($_POST['isReply']);
    $commentID = $conn->real_escape_string($_POST['commentID']);

    if ($isReply != 'false') {
        $conn->query("INSERT INTO replies (comment, commentID, userID, createdOn) VALUES ('$comment', '$commentID', '".$_SESSION['userID']."', NOW())");
        $sql = $conn->query("SELECT replies.id, Login, comment, DATE_FORMAT(replies.createdOn, '%Y-%m-%d') AS createdOn,resolu FROM replies INNER JOIN utilisateur ON replies.userID = utilisateur.ID ORDER BY replies.id DESC LIMIT 1");
    } else {
        $conn->query("INSERT INTO comments (userID, comment, createdOn) VALUES ('".$_SESSION['userID']."','$comment',NOW())");
        $sql = $conn->query("SELECT comments.id, Login, comment, DATE_FORMAT(comments.createdOn, '%Y-%m-%d') AS createdOn,resolu FROM comments INNER JOIN utilisateur ON comments.userID = utilisateur.ID ORDER BY comments.id DESC LIMIT 1");
    }

    $data = $sql->fetch_assoc();
    exit(createCommentRow($data));
}
else{
?>
    <a href="#top" class="smoothScroll"></a>
    <?php
}
}
?>