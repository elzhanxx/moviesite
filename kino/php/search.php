<?php
$search = strtolower($_POST['search_field']);
switch($search){
    case ("ходячие мертвецы" || 'dead' || 'ходячие' || 'мертвецы ходячие'):
        header('Location: /kino/dead.php');
        break;
    case ('силиконовая долина' || 'silicon' || 'силиконовая' || 'долина' || 'долина силиконовая'):
        header('Location: /kino/silicon.php');
        break;
    case ('во все тяжкие' || 'во все' || 'тяжкие' || 'все тяжкие' || 'bad'):
        header('Location: /kino/breakingbad.php');
        break;
    case ('решение уйти' || 'reshenie' || 'решение' || 'уйти'):
        header('Location: /kino/reshenie.php');
        break;
    case('пицца' || 'лакричная пицца' || 'лакричная' || 'pizza'):
        header('Location: /kino/ptitsa.php');
        break;
    case ('все везде и сразу' || 'все' || 'везде' || 'везде и сразу' || 'сразу'):
        header('Location: /kino/vse.php');
        break;
    case ('секретные материалы' || 'секретные' || 'материалы' || 'xfiles'):
        header('Location: /kino/xfiles.php');
        break;
    case ('на западном фронте без перемен' || 'на западном фронте' || 'без перемен' || 'запад'):
        header('Location: /kino/zapad.php');
        break;
    default:
    echo "<script>alert('Ваш фильм не найден!');history.back();</script>";
}
?>