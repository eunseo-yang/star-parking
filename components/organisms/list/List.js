import React from "react";
import styled, { css } from "styled-components";
import ListBox from "../../molecules/list/ListBox";

export default function List(props) {
  return (
    <Wrapper>
      <ListBox name="일산역 주차장" score="4.3"></ListBox>
      <ListBox name="일산공원 공영 주차장" score="3.9"></ListBox>
      <ListBox name="롯데리아 일산점 주차장" score="2.9"></ListBox>
      <ListBox name="일산타워 유료 주차장" score="2.7"></ListBox>
    </Wrapper>
  );
}

const Wrapper = styled.div`
width:100%
align-items:center;
justify-content:center
background-color:#fff;
`;
