import { Routes } from '@angular/router';
import { StudentDetailComponent } from './student-detail/student-detail.component';
import { StudentSubscribeComponent } from './student-subscribe/student-subscribe.component';
import { StudentScheduleComponent } from './student-schedule/student-schedule.component';
import { SubjectDetailComponent } from './subject-detail/subject-detail.component';

export const routes: Routes = [
  {
    path: 'students/:matricula',
    component: StudentDetailComponent,
  },
  {
    path: 'students/:matricula/subscribe/:codigo',
    component: StudentSubscribeComponent,
  },
  {
    path: 'students/:matricula/schedule',
    component: StudentScheduleComponent,
  },
  {
    path: 'subjects/:codigo',
    component: SubjectDetailComponent,
  },
];
