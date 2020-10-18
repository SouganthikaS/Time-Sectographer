angular
    .module('TaskListApp', [])
    .controller('TaskListAddController', TaskListAddController)
    .controller('TaskListShowController', TaskListShowController)
    .service('TaskListService', TaskListService)
    .directive("testDirective", function () {
        return {
          template: "<h1>Time Sectographer</h1>"
        };
      });

TaskListAddController.$inject = ['TaskListService'];
function TaskListAddController(TaskListService) {
    var taskAdder = this;
    taskAdder.taskName = '';
    taskAdder.taskDescription = '';
    taskAdder.taskTime = '';
    taskAdder.taskCategory = '';
    //taskAdder.date = $filter('date')(taskAdder.date, "dd/MM/yyyy");
    taskAdder.addTask = function () {
        TaskListService.addTask(taskAdder.taskName, taskAdder.taskDescription, taskAdder.taskTime, taskAdder.taskCategory);
    };
}
TaskListShowController.$inject = ['TaskListService'];
function TaskListShowController(TaskListService) {
    var showList = this;
    showList.tasks = TaskListService.getTasks();
    showList.removeTask = function (taskIndex) {
        TaskListService.removeTask(taskIndex);
    };
}
function TaskListService() {
    var service = this;
    var tasks = [{name:"Website Creation",description:"Develop Website Decently",category:"Work"}];
    service.addTask = function (taskName, description, taskTime,category) {
        //taskTime =$filter('date')(taskTime, "dd/MM/yyyy");
        var task = { name: taskName, description: description, time: taskTime, category:category };
        tasks.push(task);
    };
    service.removeTask = function (taskIndex) {
        tasks.splice(taskIndex, 1);
    };
    service.getTasks = function () {
        return tasks;
    };
}

