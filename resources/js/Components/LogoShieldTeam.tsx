import { SVGAttributes } from 'react';
import MeuSVG from '../../assets/logo_shield_team_bjj_color.svg';

export default function LogoShieldTeam(props: SVGAttributes<SVGElement>) {
	return (
		<img className='w-16' src={MeuSVG} alt="Meu SVG" />
	);
}
