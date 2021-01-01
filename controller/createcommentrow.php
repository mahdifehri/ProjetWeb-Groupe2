<?php
function createCommentRow($data) {
    global $conn;
    
    $response = '
            <div class="comment" >
            
                <div class="user">'.$data['Login'].' <span class="time">'.$data['createdOn'].' </span>  <span>/'.$data['resolu'].' </span></div>
                 <div id="corps" class="userComment">'.$data['comment'].'</div>
                <div class="reply"><a href="javascript:void(0)" data-commentID="'.$data['id'].'" onclick="reply(this)">REPLY</a></div>
                <div class="replies">
                ';

    $sql = $conn->query("SELECT replies.id, Login, comment, DATE_FORMAT(replies.createdOn, '%Y-%m-%d') AS createdOn,resolu  FROM replies INNER JOIN utilisateur ON replies.userID = utilisateur.ID WHERE replies.commentID = '".$data['id']."' ORDER BY replies.id DESC LIMIT 1");
    while($dataR = $sql->fetch_assoc())
        $response .= createCommentRow($dataR);

    $response .= '
                        </div>
            </div>
        ';

    return $response;
}
?>