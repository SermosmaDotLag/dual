<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #c2c2c2;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid black;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr {
            background-color: #f2f2f2;
        }

        

        a {
            text-decoration: none;
            color: #3498db;
        }
        main { 
            margin: 15px;
        }

        .alert alert-success{
            background-color:green;
        }

        .initialButtons{
            margin-top: 30px;
            margin-left: 30px;
        }

        @stack('styles')
    </style>