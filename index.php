<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Gantt Chart</title>
    <!-- Include dhtmlxGantt CSS and JS -->
    <link rel="stylesheet" href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css">
    <script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
</head>
<body>
    <div id="gantt" style="width: 100%; height: 600px;"></div>
    <script>
        // Initialize the Gantt chart
        gantt.init("gantt");

        // Load some sample data
        gantt.parse({
            data: [
                { id: 1, text: "Project #1", start_date: "2023-01-01", duration: 18, progress: 0.4, open: true },
                { id: 2, text: "Task #1", start_date: "2023-01-01", duration: 8, progress: 0.6, parent: 1 },
                { id: 3, text: "Task #2", start_date: "2023-01-09", duration: 8, progress: 0.2, parent: 1 }
            ]
        });
    </script>
</body>
</html>
