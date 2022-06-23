<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
    <script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>
<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "BD34MpeESgLytbWyfCPIiHX_19HhBZ5fbCjS663epCRJvKwuqNXPkdTliiZ1TfJKJg7IjhxRS9itwFi6B_OZgmY",
        authDomain: "causal-lattice-350412-default-rtdb.firebaseio.com",
        databaseURL: "https://causal-lattice-350412-default-rtdb.firebaseio.com",
        projectId: "causal-lattice-350412",
        storageBucket: "",
        messagingSenderId: "218933969102",
        appId: ""
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
 
    var myName = prompt("Enter your name");
</script>
     
<!-- create a form to send message -->
<form onsubmit="return sendMessage();">
    <input id="message" placeholder="Enter message" autocomplete="off">
 
    <input type="submit">
</form>
     
<script>
    function sendMessage() {
        // get message
        var message = document.getElementById("message").value;
 
        // save in database
        firebase.database().ref("messages").push().set({
            "sender": myName,
            "message": message
        });
 
        // prevent form from submitting
        return false;
    }
</script>
<ul id="messages"></ul>
     
<script>
    // listen for incoming messages
    firebase.database().ref("messages").on("child_added", function (snapshot) {
        var html = "";
        // give each message a unique ID
        html += "<li id='message-" + snapshot.key + "'>";
        // show delete button if message is sent by me
        if (snapshot.val().sender == myName) {
            html += "<button data-id='" + snapshot.key + "' onclick='deleteMessage(this);'>";
                html += "Delete";
            html += "</button>";
        }
        html += snapshot.val().sender + ": " + snapshot.val().message;
        html += "</li>";
 
        document.getElementById("messages").innerHTML += html;
    });
    function deleteMessage(self) {
    // get message ID
    var messageId = self.getAttribute("data-id");
 
    // delete message
    firebase.database().ref("messages").child(messageId).remove();
}
 
// attach listener for delete message
firebase.database().ref("messages").on("child_removed", function (snapshot) {
    // remove message node
    document.getElementById("message-" + snapshot.key).innerHTML = "This message has been removed";
});
</script>
</html>