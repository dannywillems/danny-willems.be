<?php
    function begin_services()
    {
        echo "<section id='services'>";
    }

    function end_services()
    {
        echo "</section>";
    }

    function begin_services_box()
    {
        echo "<div class='container'>
            <div class='row'>";
    }

    function end_services_box()
    {
        echo "</div></div>";
    }

    function new_services_header($name_services, $description)
    {
        echo "<div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <h2 class='section-heading'>" . $name_services . "</h2>
                    <h3>" . $description . "</h3>
                    <hr class='primary'>
                </div>
            </div>
        </div>";
    }

    function add_img($name_var, $img)
    {
        echo "<img class='fa fa-4x wow bounceIn text-primary' alt=" . $name_var . " src=" . $img . "></img>";
    }

    function print_name_box($name_box)
    {
        echo "<h3>" . $name_box . "</h3>";
    }

    function print_text_danger($text_danger)
    {
        echo "<p class='text-danger'>";
            echo $text_danger;
            echo "</p>";
    }

    function print_text_success($text_success)
    {
        echo "<p class='text-success'>";
            echo $text_success;
            echo "</p>";
    }

    function add_button_skills($name_var, $skills)
    {
        echo "<button class='btn btn-info btn-xl' type='button' data-toggle='collapse' data-target='#collapse-" . $name_var . "' aria-expanded='false' aria-controls='collapse-" . $name_var . "'>
            Mes compétences
        </button>";
        echo "<div class='collapse' id='collapse-" . $name_var . "'>
            <div class='well'>
                <ul>";
                    foreach ($skills as $skill)
                        echo "<li>" . $skill . "</li>";
        echo "</ul></div></div>";
    }

    function add_button_skills_to_learn($name_var, $skills)
    {
        echo "<button class='btn btn-primary btn-xl' type='button' data-toggle='collapse' data-target= '#collapse-" . $name_var . "-to-learn' aria-expanded='false' aria-controls='collapse-" . $name_var . "-to-learn'>
           Impatient d'apprendre
        </button>";
        echo "<div class='collapse' id='collapse-" . $name_var . "-to-learn'>
            <div class='well'>
                <ul>";
                    foreach ($skills as $skill)
                        echo "<li>" . $skill . "</li>";
        echo "</ul></div></div>";
    }

    function new_services_box($row_size, $name_box, $name_var, $img, $text_danger, $text_success, $skills, $skills_to_learn)
    {
        echo "<div class='col-lg-" . $row_size . " col-md-6 text-center'><div class='service-box'>";
        add_img($name_var, $img);
        print_name_box($name_box);
        if (!empty($text_danger))
            print_text_danger($text_danger);
        if (!empty($text_success))
            print_text_success($text_success);
        add_button_skills($name_var, $skills);
        if (!empty($skills_to_learn))
            add_button_skills_to_learn($name_var, $skills_to_learn);
        echo "</div></div>";
    }
?>
