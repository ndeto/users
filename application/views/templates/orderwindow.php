 <section>
        <div class="col-md-3"></div>
        <div id="body-cont" class="col-md-8">
            <?php
                $formattributes = array(
                'role'=>'form',
                'class'=>'form-horizontal'
                );
            echo form_open('orders/orderdetails',$formattributes);
?>
<div class="form-group">
    <label for="servicetype" class="control-label col-sm-2">Service Type:</label>
    <div class="col-sm-10">
        <select name="servicetype" id="servicetype"  onchange="updateCost();" class="form-control" >
        <option value="Writing">Writing</option>
        <option value="Editing">Editing</option>
        <option value="Proofreading">Proofreading</option>
        <option value="Rewriting">Rewriting</option>
        <option value="Revision">Revision</option>
        </select>
    </div>
</div>

<?php



?>
<div class="form-group">
<label for="assignmenttype" class="control-label col-sm-2">Type of Document:</label>
    <div class="col-sm-10">
        <select id="assignmenttype" name="assignmenttype"onchange="updateCost()" name="assignmenttype" class="form-control">                                                         
            <optgroup label="Essay">
                <option value="15.99|Essay" selected >Essay</option>
            </optgroup>
            <optgroup label="Term Paper">
                <option value="15.99|Term Paper"  >Term Paper</option>   
            </optgroup>

            <optgroup label="Research Paper">
                <option value="15.99|Research Paper"  >Research Paper</option>
                <option value="15.99|Business Plan"  >Business Plan</option>
                <option value="15.99|Literature Review"  >Literature Review</option>
                <option value="15.99|Research Proposal"  >Research Proposal</option>
                <option value="15.99|Research Report"  >Research Report</option>
                <option value="15.99|Research Summary"  >Research Summary</option>
            </optgroup>
            <optgroup label="Course Work">
                <option value="15.99|Coursework"  >Coursework</option>  
            </optgroup>
            <optgroup label="Book/Article/Movie">
                <option value="15.99|Reaction Paper"  >Reaction Paper</option>
                <option value="15.99|Article Writing"  >Article Writing</option>
                <option value="15.99|Report"  >Report</option>
                <option value="15.99|Summary"  >Summary</option>
                <option value="15.99|Review"  >Review</option>                                                             
                <option value="15.99|Critique"  >Critique</option>
            </optgroup>
            <optgroup label="Thesis Paper">
                <option value="15.99|Thesis"  >Thesis</option>
                <option value="15.99|Thesis/Disseertation Proposal"  >Thesis/Dissertation Proposal</option>  
            </optgroup>
            <optgroup label="Dissertation Services">
                <option value="16.99|Dissertation"  >Dissertation</option>
                <option value="16.99|Dissertation Chapter-Abstract"  >Dissertation Chapter - Abstract</option>
                <option value="16.99|Dissertation Chapter-Introduction"  >Dissertation Chapter - Introduction</option>
                <option value="16.99|Dissertation Chapter-Literature Review"  >Dissertation Chapter - Literature Review</option>
                <option value="16.99|Dissertation Chapter-Methodology"  >Dissertation Chapter - Methodology</option>
                <option value="16.99|Dissertation Chapter-Results"  >Dissertation Chapter - Results</option>
                <option value="16.99|Dissertation Chapter-Discussion"  >Dissertation Chapter - Discussion</option>
                <option value="16.99|Dissertation Chapter-Conclusion"  >Dissertation Chapter - Conclusion</option>
            </optgroup>
            <optgroup label="Formatting">
                 <option value="15.99|Formatting"  >Formatting</option>   
            </optgroup>
            <optgroup label="Admission Services">
                <option value="15.99|Application Essay">Application Essay</option>
                <option value="15.99|Admission Essay"  >Admission Essay</option>
                <option value="15.99|Scholarship Essay"  >Scholarship Essay</option>
                <option value="15.99|Personal Statement"  >Personal Statement</option>
                <option value="15.99|Letter Writing"  >Letter Writing</option>
                <option value="15.99|College Essay"  >College Essay</option>
            </optgroup>
            <optgroup label="Case Study">
                <option value="15.99|Case Study"  >Case Study</option>  
            </optgroup>
            <optgroup label="Lab Report">
                <option value="16.99|Lab Report"  >Lab Report</option>  
            </optgroup>
            <optgroup label="Speech/Presentation">
                <option value="15.99|Speech/Presentation"  >Speech/Presentation</option>   
            </optgroup>
            <optgroup label="Annotated Bibliography">
                <option value="15.99|Annotated Bibliography"  >Annotated Bibliography</option>   
            </optgroup>
            <optgroup label="Assignments">
                <option value="15.99|Questions/Problems"  >Questions/Problems</option> 
                <option value="15.99|Multiple Choice Questions"  >Multiple Choice Questions</option>                                                              
                <option value="15.99|Statistics Project"  >Statistics Project</option>                                                                                                                            
                <option value="15.99|Power Point Presentation"  >Power Point Presentation</option>
                <option value="16.99|Programming"  >Programming</option> 
            </optgroup>
            <optgroup label="Resume Services">
                <option value="15.99|Resume Writing">Resume Writing</option>
                <option value="15.99|Resume Editing">Resume Editing</option>
                <option value="15.99|CV Writing">CV Writing</option>
                <option value="15.99|CV Writing">CV Writing</option>
                <option value="15.99|Cover Letter">Cover Letter</option>
            </optgroup>
            <optgroup label="Other">
                <option value="15.99|Other"  >Other</option>  
            </optgroup>
        </select>
    </div>
</div>
            
<div class="form-group">
<label for="academiclevel" class="col-sm-2 control-label">Academic Level:</label>
    <div class="col-sm-10">
        <select id="academiclevel" onchange="updateCost()" name="level" class="form-control">
            <option value="High School">High School</option>
            <option value="College" selected="selected">College</option>
            <option value="University" >University</option>              
            <option value="Masters">Masters</option>
            <option value="PhD">PhD</option>
        </select>
    </div>
</div>

<div class="form-group">
<label for="deadline" class="control-label col-sm-2">Deadline:</label>
    <div class="col-sm-10">
        <select id="deadline" name="deadline" onchange="updateCost()" class="form-control">
            <option value="6">6 hours</option>                                
            <option value="12">12 hours</option>
            <option value="24">24 hours</option>
            <option value="48">48 hours</option>
            <option value="72">3 days</option>
            <option value="96">4 days</option>
            <option value="120">5 days</option>
            <option value="168" selected="true">7 days</option>
            <option value="240">10 days</option>
            <option value="336">2 weeks</option>
            <option value="504">3 weeks</option>
            <option value="672">1 month</option>
            
        </select>
    </div>
</div>
            
<div class="form-group ">
    <div class="col-sm-offset-2">
    <div class="radio-inline">
        <div class="radio">
            <label for="doubleSpacing"><input name="spacing" id="doubleSpacing" type="radio" value="double" checked="yes" onchange="radioChecked()"  />Double Spacing</label>
        </div>
        <div class="radio">
            <label for="singleSpacing"><input name="spacing" id="singleSpacing" type="radio" value="single" onchange="radioChecked()"  />Single Spacing</label>
        </div>
    </div>
    </div>
</div>
            
            <input type="hidden" name="order_price" value="400" />

<div class="form-group">
    <div class="col-sm-10">
        
    </div>
</div>    
<?php 
//$page = 1;
//$words = 275;
echo '<div class="form-group">'
. '<label for="words" class="control-label col-sm-2">Words/ Pages:</label>'
. '<div class="col-sm-10">';
echo "<select class='form-control' name='pages'>"
. "<option value='1'> 1 Page / 275 Words";

for($page = 2,$words = 550;$page<21;$page++,$words = $words+275){
    echo '<option value="'.$page.'">'.$page.' Pages/ '.$words.' Words </option>';
}
echo "</select>";
echo '</div></div>';
echo '<div class="form-group">';
echo 
'<div class="col-sm-offset-2 col-sm-10">
<br>
<button type="submit" class="btn btn-default">Order</button>
 <br>
 </div></div>
 </form>';

?>
        </div>
    </section>
