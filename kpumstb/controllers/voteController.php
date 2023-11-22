<?php
include('./config/db.php');
include('./controllers/query.php');

function signupController($no_identitas) {
    print_r($no_identitas);
    // add registran data to data_registrasi_pemilih table
    // mysqli_query($GLOBALS['conn'], 
    //                 "INSERT INTO data_registrasi_pemilih (id, no_identitas) 
    //                     VALUES ('','$no_identitas')");
    // echo "<script>alert('No Indentitas berhasil didaftarkan. Silakan check aktivasi akun.')</script>";
    // echo "<script>window.location.href = './account-checker'</script>";
}

function signinController($no_identitas, $voter_token) {
    // search voter data
    $search_voter_data = query("SELECT * FROM data_induk_pemilih WHERE voter_token = '$voter_token'");
    if(count($search_voter_data) > 0) {
        $voter_data = $search_voter_data[0];
        if($voter_data['is_voted'] != 1) {
            // Set session
            $_SESSION['voter_token'] = $voter_token; 
            echo "<script>alert('Berhasil masuk.')</script>";
            echo "<script>window.location.href = './'</script>";
        }
        else {
            echo '<script>alert("Akun tersebut sudah melakukan pemungutan suara.")</script>';
        }
    }
    else {
        echo "<script>alert('Token yang Anda masukkan salah!')</script>";
    }
    
}

$result = [];
$no_identitas = '-';
$name = '-';
$grade = '-';
function accountChecker($no_identitas) {    
    $voter_data_to_check = $no_identitas;
    $search_in_registration_data = query("SELECT * FROM data_registrasi_pemilih WHERE no_identitas = '$voter_data_to_check'");
    if(count($search_in_registration_data) > 0) {
        $voter_data = query("SELECT * FROM data_induk_pemilih WHERE no_identitas = '$voter_data_to_check'");
        if(count($voter_data) > 0) {
            $no_identitas = $voter_data[0]['no_identitas'];
            $name = $voter_data[0]['name'];
            $grade = $voter_data[0]['grade'];
            $result = [$no_identitas, $name, $grade];
            return $result;
        }
        // else {
        //     $result = [$no_identitas, $GLOBALS['name'], $GLOBALS['grade']];
        //     return $result;
        // }
    }
    else {
        $no_identitas = $voter_data_to_check;
        $name = '-';
        $grade = '-';
        $result = [$no_identitas, $name, $grade];
        return $result;
    }
    
}

function takeVoteController($voter_token, $candidate_selected) {
    $search_voter_data = query("SELECT * FROM data_induk_pemilih WHERE voter_token = '$voter_token'");
    if(count($search_voter_data) > 0) {
        $voter_data = $search_voter_data[0];
        if($voter_data['is_voted'] != '1') {
            $voter_id = $voter_data['id_voter'];
            // set selection candidate
            mysqli_query($GLOBALS['conn'], "INSERT INTO votes (id_vote, id_voter, candidate_selected) VALUES ('1', '$voter_id', '$candidate_selected')");
            // set the column is voted's value is 1
            mysqli_query($GLOBALS['conn'], "UPDATE data_induk_pemilih SET is_voted = '1' WHERE id_voter = '$voter_id'");
            // alert thanks to the vote
            echo "<script>alert('Terimakasih telah melakukan pemungutan suara. Satu suara Anda sangat berarti.')</script>";
            // redirect to sign in page
            echo "<script>window.location.href = './signin'</script>";
        }
        else {
            echo '<script>alert("Anda sudah mengambil suara.")</script>';
        }
        
    }
}

function isVoted($voter_token) {
    $search_voter_data = query("SELECT * FROM data_induk_pemilih WHERE voter_token = '$voter_token'");
    // print_r($search_voter_data[0]);
    if($search_voter_data[0]['is_voted'] == '1') {
        echo "<script>alert('Anda sudah melakukan pemungutan suara!')</script>";
        echo "<script>window.location.href = './signout'</script>";
    } else {
        
    }
}