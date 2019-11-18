import React from "react";
import styled, { css } from "styled-components";
import Box from "../../atoms/list/Box";
import ImageHolder from "../../atoms/list/ImageHolder";
import Link from "next/link";
import Row from "../../atoms/Row";
import Col from "../../atoms/Col";
import Text from "../../atoms/Text";

export default function ListBox(props) {
  return (
    <Wrapper>
      <Box>
        <ImageHolder></ImageHolder>
        <TextWrapper>
          <Text level="4" weight="bold">
            {props.name}
          </Text>
          <Text level="3">평균 평점 : {props.score}</Text>
        </TextWrapper>
      </Box>
    </Wrapper>
  );
}

const Wrapper = styled.div``;

const TextWrapper = styled.div`
  display: flex;
  flex-direction: column;
  margin: auto 0;
`;
