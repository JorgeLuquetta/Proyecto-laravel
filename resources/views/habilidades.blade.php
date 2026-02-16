<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Skills Técnicas - Programación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 350px;
        }
        .card h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .skill {
            margin-bottom: 15px;
        }
        .skill-name {
            font-weight: bold;
            margin-bottom: 5px;
            color: #444;
        }
        .bar {
            background-color: #e0e0e0;
            border-radius: 20px;
            overflow: hidden;
            height: 10px;
        }
        .progress {
            height: 10px;
            border-radius: 20px;
        }
        .html { width: 90%; background-color: #e44d26; }
        .css { width: 85%; background-color: #264de4; }
        .js { width: 75%; background-color: #f0db4f; }
        .java { width: 70%; background-color: #f89820; }
        .python { width: 80%; background-color: #3776ab; }
        .php { width: 25%; background-color: #18be02; }
    </style>
</head>
<body>

    <div class="card">
        <h2>Skills Técnicas</h2>

        <div class="skill">
            <div class="skill-name">HTML</div>
            <div class="bar">
                <div class="progress html"></div>
            </div>
        </div>

        <div class="skill">
            <div class="skill-name">CSS</div>
            <div class="bar">
                <div class="progress css"></div>
            </div>
        </div>

        <div class="skill">
            <div class="skill-name">JavaScript</div>
            <div class="bar">
                <div class="progress js"></div>
            </div>
        </div>

        <div class="skill">
            <div class="skill-name">Java</div>
            <div class="bar">
                <div class="progress java"></div>
            </div>
        </div>

        <div class="skill">
            <div class="skill-name">Python</div>
            <div class="bar">
                <div class="progress python"></div>
            </div>
        </div>

        <div class="skill">
            <div class="skill-name">Php</div>
            <div class="bar">
                <div class="progress php"></div>
            </div>
        </div>

    </div>

</body>
</html>
