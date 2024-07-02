<?php
    // Reverse Alphabet dengan Angka Tetap di Akhir
    function reverseAlphabet($str) {
        $alphabets = preg_replace('/[^a-zA-Z]/', '', $str);
        $numbers = preg_replace('/[a-zA-Z]/', '', $str);
        $reversed = strrev($alphabets);
        return $reversed . $numbers;
    }

    $string = "NEGIE1";
    echo "Reversed: " . reverseAlphabet($string) . "\n"; // Output: EIGEN1

    // Mencari Kata Terpanjang dari Kalimat
    function longest($sentence) {
        $words = explode(' ', $sentence);
        $longestWord = '';

        foreach ($words as $word) {
            if (strlen($word) > strlen($longestWord)) {
                $longestWord = $word;
            }
        }

        return $longestWord;
    }

    $sentence = "Saya sangat senang mengerjakan soal algoritma";
    echo "Longest word: " . longest($sentence) . "\n"; // Output: mengerjakan

    // Menghitung Frekuensi Kata dari Array INPUT dan QUERY
    function countQueries($input, $query) {
        $result = [];

        foreach ($query as $q) {
            $result[] = count(array_keys($input, $q));
        }

        return $result;
    }

    $input = ['xc', 'dz', 'bbb', 'dz'];
    $query = ['bbb', 'ac', 'dz'];
    $output = countQueries($input, $query);
    echo "Query count: " . implode(', ', $output) . "\n"; // Output: 1, 0, 2

    // Menghitung Selisih Jumlah Diagonal Sebuah Matrik NxN
    function diagonalDifference($matrix) {
        $n = count($matrix);
        $primaryDiagonal = 0;
        $secondaryDiagonal = 0;

        for ($i = 0; $i < $n; $i++) {
            $primaryDiagonal += $matrix[$i][$i];
            $secondaryDiagonal += $matrix[$i][$n - $i - 1];
        }

        return abs($primaryDiagonal - $secondaryDiagonal);
    }

    $matrix = [
        [1, 2, 0],
        [4, 5, 6],
        [7, 8, 9]
    ];
    echo "Diagonal difference: " . diagonalDifference($matrix) . "\n"; // Output: 3
?>
