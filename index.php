<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Głosowanie - TEB</title>

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap required JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
	<form>
		<h1>Głosowanie na przewodniczącego szkoły</h1>
        <?php
            if ($_GET) {
                $error_message = "";
                if (!$_GET["Voter"]) {
                    $error_message = $error_message.'Brak identyfikatora! ';
                } else {
                    if (is_numeric($_GET["Voter"])) {
                        if (strlen($_GET["Voter"]) == 6) {
                            if ($_GET["Voter"] % 7) {
                                $error_message = $error_message.'Błędny identyfikator! ';
                            }
                        } else {
                            $error_message = $error_message.'Identyfikator ma złą długosć! ';
                        }
                    } else {
                        $error_message = $error_message.'Identyfikator nie jest nuemryczny! ';
                    }
                }

                if (!$_GET["Vote"]) {
                    $error_message = $error_message.'Brak głosu!';
                }               

                if ($error_message != "") {
                    echo '<div class="alert alert-danger" role="alert">'.$error_message.'</div>';
                } else {
                   echo '<div class="alert alert-success" role="alert">Głos przesłany na '.$_GET["Vote"].'!</div>';
                }
             }
        ?>
        <div class="form-group">
            <div class="form-group-row">
                <label for="Voter">ID</label>
                <input type="text" name="Voter" id="Voter">
            </div>
            <div class="form-group-row">
                <label for="Adam">Adam</label>
                <input type="radio" name="Vote" id="Adam" value="Adam">
            </div>
            <div class="form-group-row">
                <label for="Ewa">Ewa</label>
                <input type="radio" name="Vote" id="Ewa" value="Ewa">
            </div>
            <button type="submit" class="btn btn-primary">Głosuj</button>
        </div>
	</form>
    </div>
</body>
</html>
