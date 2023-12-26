export interface Payments {
	student_id     : number;
	payment_date   : Date;
	amount_paid    : string;
	reference_month: string;
	payment_method : string;
	notes          : string;
}