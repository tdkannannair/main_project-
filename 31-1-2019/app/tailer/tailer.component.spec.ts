import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { TailerComponent } from './tailer.component';

describe('TailerComponent', () => {
  let component: TailerComponent;
  let fixture: ComponentFixture<TailerComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TailerComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TailerComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
