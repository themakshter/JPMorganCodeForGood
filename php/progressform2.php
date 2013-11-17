<!DOCTYPE html>
<html>
<head>
<body>

<form name="demo" action="addprogress.php" method="post">
    <table summary="Demonstration form">
        <th>Updates</th>
        <tbody>
        <tr>
            <td>
                <label for="task">Task</label>
            </td>
            <td>
                <label for="update">Update</label>
            </td>
            <td>
                <label for="plan">Plan</label>
            </td>
            <td>
                <label for="date">Date</label>
            </td>
        </tr>
        <tr>
            <td>
                <input name="taskid[]" type="text" value="1"></td>
            <td>
                <input name="progress[]" type="text" value="asdasdas"></td>
            <td>
                <input name="plan[]" type="text" value="asdasas"></td>
            <td>
                <input name="date[]" type="date" value="2013-01-01"></td>
        </tr>
        </tbody>
    </table>
    <table>
        <th>Good News</th>
        <tbody>
        <tr>
            <td>
                <label for="good_news">Achievement</label>
            </td>
            <td>
                <input name="gd_content[]" type="text" value="good"></td>
            <input name="gd_msgtype[]" type="hidden" value="good">
        </tr>
        <tr>
            <td>
                <label for="remark">Remark</label>
            </td>
            <td>
                <input name="gd_remark[]" type="text" value="good"></td>
        </tr>
        </tbody>
    </table>
    <table>
        <th>Challenges</th>
        <tbody>
        <tr>
            <td>
                <label for="challenge">Challenge</label>
            </td>
            <td>
                <label for="difficulty">Difficulty</label>
            </td>
            <td>
                <label for="priority">Priority</label>
            </td>
        </tr>
        <tr>
            <td>
                <input name="bad_content[]" type="text" value="challenge"></td>
            <input name="bad_msgtype[]" type="hidden" value="challenge"></td>
            <td>
                <input name="bad_difficulty[]" type="range" min="1" max="5"></td>
            <td>
                <input name="bad_priority[]" type="range" min="1" max="5"></td>
        </tr>
        <tr>
            <td>
                <label for="help_needed">Help Needed</label>
            </td>
            <td>
                <input name="bad_helptypeid[]" type="text" value="1"></td>
            <td>
                <input name="bad_remark[]" type="text" value="How can we help"></td>
        </tr>

        </tbody>
    </table>
    <input name="Submit" value="Submit" type="submit"></form>
</body>
</html>