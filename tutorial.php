<html>
<head>
    <title>English Tutorial</title>
</head>
<body>
    <div id="frm">
    <p>please choose a topic:</p>
        <form action = "processinc.php" method="POST">
            <select name="menu">
                <option value="noun">Noun</option>
                <option value="verb">Verb</option>
                <option value="pronoun">Pronoun</option>
            </select>
            <button type="submit">Submit</button>
        </form>

        <?php
            interface TutorialInterface{
                public function __construct($member1, $member2, $member3);
                public function __destruct();
            }

            class Members implements TutorialInterface{
                public $member1;
                public $member2;
                public $member3;
                public function __construct($member1, $member2, $member3){
                    $this->member1 = $member1;
                    $this->member2 = $member2;
                    $this->member3 = $member3;
                }
                public function __destruct(){
                    echo "Made by: <br>  {$this->member1}  <br>  {$this->member2}   <br> {$this->member3}";
                }
            }

            $mem = new Members("Anjanette", "Gillian", "Danae");
        ?>
    </div>
</body>
</html>