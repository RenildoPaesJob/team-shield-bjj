export interface Payments {
	student: {
		id: string
		name:string,
		email:string,
		smartphone: string,
		belt:string
	};
	payment_date: Date
	amount_paid: string
	reference_month: string
	payment_method: string
	notes: string
	student_id: string
	id:string
}