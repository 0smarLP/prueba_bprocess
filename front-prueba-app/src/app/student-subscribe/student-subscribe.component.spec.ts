import { ComponentFixture, TestBed } from '@angular/core/testing';

import { StudentSubscribeComponent } from './student-subscribe.component';

describe('StudentSubscribeComponent', () => {
  let component: StudentSubscribeComponent;
  let fixture: ComponentFixture<StudentSubscribeComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [StudentSubscribeComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(StudentSubscribeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
