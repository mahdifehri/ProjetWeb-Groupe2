<?php
if (isset($_POST['getAllComments'])) {
    $start = $conn->real_escape_string($_POST['start']);

    $response = "";
    $sql = $conn->query("SELECT comments.id, Login, comment, DATE_FORMAT(comments.createdOn, '%Y-%m-%d') AS createdOn ,resolu FROM comments INNER JOIN utilisateur ON comments.userID = utilisateur.ID ORDER BY comments.id DESC LIMIT $start, 20");
    while($data = $sql->fetch_assoc())
        $response .= createCommentRow($data);

    exit($response);
}
?>