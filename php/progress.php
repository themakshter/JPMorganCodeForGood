<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal">
                <fieldset>
                    <legend>Datepicker, Autocomplete, WYSIWYG</legend>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Auto complete </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block">Start typing to activate auto complete!</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Date input</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">File input</label>
                        <div class="controls">
                            <input class="input-file uniform_on" id="fileInput" type="file">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div><!--/row-->



<form name="demo">
    <table summary="Demonstration form">
        <th>Updates</th>
        <tbody>
        <tr>
            <td>
                <label for="task">Task</label>
            </td>
            <td>
                <label for="goals">Goals</label>
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
        <div = id="update_input">
        <tr>
            <td>
                <input name="task"  type="text"></td>
            <td>
                <input name="goals" type="text"></td>
            <td>
                <input name="update" type="text"></td>
            <td>
                <input name="plan" type="text"></td>
            <td>
                <input name="date" type="date"></td>
        </tr>
        <tr>
            <td><input id="add_more" value="Add another" type="button"></td></tr>
        </div>
        </tbody>
    </table>
    <table>
        <th>Good News</th>
        <tbody>
        <div id="good_new_input">
            <tr>
                <td>
                    <label for="good_news">Achievement</label>
                </td>
                <td>
                    <input name="good_news"  type="text"></td>
            </tr>
            <tr>
                <td>
                    <label for="remark">Remark</label>
                </td>
                <td>
                    <input name="remark"  type="text"></td>
            </tr>
            <tr> <td><input id="add_more" value="Add another" type="button"></td></tr>
        </div>
        </tbody>
    </table>
    <table>
        <th>Challenges</th>
        <tbody>
        <div id="challenge_input">
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
                    <input name="challenge"  type="text"></td>
                <td>
                    <input name = "difficulty" type="range" min="1" max="5"></td>
                <td>
                    <input name = "priority" type="range" min="1" max="5"></td>
            </tr>
            <tr>
                <td>
                    <label for="help_needed">Help Needed</label>
                </td>
                <td>
                    <input name="help_needed"  type="text"></td>
            </tr>
            <tr> <td><input id="add_more" value="Add another" type="button"></td></tr>
        </div>
        </tbody>
    </table>
    <input name="Submit" value="Submit" type="submit" ></form>