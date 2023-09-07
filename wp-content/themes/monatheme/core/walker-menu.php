<?php
class Mona_Walker_Nav_Menu extends Walker_Nav_Menu
{

    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class='menu-list'>\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;

        $output .= "<li class='parent fz16 fw6" .  implode(" ", $item->classes) . "'>";

        //Add SPAN if no Permalink
        if ($permalink && $permalink != '#') {
            $output .= '<a class="menu-link" href="' . $permalink . '">';
        } else {
            $output .= '<a class="menu-link" href="javascript:;">';
        }

        $output .= $title;

        if ($permalink && $permalink != '#') {

            if ($args->walker->has_children) {
                $output .= '<span class="menu-ic">
                <i class="fas fa-sort-down"></i>
            </span>';
            }

            $output .= '</a>';
        } else {
            $output .= '</a>';
        }
    }
}

class Mona_Walker_Nav_Menu_Mobile extends Walker_Nav_Menu
{

    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class='menu-list'>\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;

        $output .= "<li class='parent fz16 fw6 " .  implode(" ", $item->classes) . " menu-item dropdown-mb'>";

        //Add SPAN if no Permalink
        if ($permalink && $permalink != '#') {
            $output .= '<div class="menu-item-box"><a class="menu-link" href="' . $permalink . '">';
        } else {
            $output .= '<a class="menu-link" href="javascript:;">';
        }

        $output .= $title;

        if ($permalink && $permalink != '#') {
            $output .= '</a>';
            if ($args->walker->has_children) {
                $output .= '<span class="menu-ic-mb">
                <i class="fal fa-angle-down"></i>
            </span>';
            }


            $output .= '</div>';
        } else {
            $output .= '</a>';
            $output .= '</div>';
        }
    }
}
