import styled, { css } from "styled-components";

export default styled.button`
width: 4rem
height: 4rem
border:0.2rem solid #fff;
border-radius:2rem;
background-color:#F68657;
position:absolute;
color:#fff;
font-size:1.5rem;
right:1.5rem;
${props => css`
  bottom: ${props.bottom};
`}
`;
