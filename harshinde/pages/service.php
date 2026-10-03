<h4>Community</h4>
<ul>
    <li><b>Google Cloud Community</b> (2024 &ndash; 2025): Facilitator and student mentor in the Google Cloud Arcade Facilitator Program, guiding 420+ students on Google Cloud computing labs, Kubernetes, and Cloud Functions.</li>
    <li><b>IETE Student Forum (ISF)</b> (2023 &ndash; 2025): Student Coordinator at KDKCE. Organized technical seminars, competitive programming sessions, and student challenges.</li>
</ul>

<h4>Talks &amp; Presentations</h4>
I am grateful to have been invited to give the following talks and presentations:
<ul>
    <?php
    function talk_entry($item)
    {
        $venues = array_map(function ($venue) {
            if ($venue["link"] == "") {
                return $venue["venue"] . " (" . $venue["date"] . ")";
            }
            return $venue["venue"] . " (<a href='" . $venue["link"] . "' target='_blank' rel='noopener'>" . $venue["date"] . "</a>)";
        }, $item["venues"]);
        $venues = implode(", ", $venues);
        return "<li>" . $item["title"] . " at " . $venues . "</li>";
    }

    $data = json_decode(file_get_contents("talks.json"), TRUE);
    foreach ($data as &$item) {
        echo talk_entry($item);
    }
    ?>
</ul>