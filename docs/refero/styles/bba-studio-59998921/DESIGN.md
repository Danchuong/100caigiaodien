# BBA Studio — Refero Style

- Refero URL: https://styles.refero.design/style/59998921-8f1e-4f47-849d-e2eea939b0ed
- Site URL: https://www.bbastudio.eu
- ID: 59998921-8f1e-4f47-849d-e2eea939b0ed
- Theme: light
- Industry: other
- Created: 2026-04-30T01:53:13.130Z
- Ranks: newest: 498, popular: 1033, trending: 938

> Architectural Gray Canvas

## Description

BBA Studio presents a stark, almost monochromatic design system built on a foundation of neutral tones. The visual language relies heavily on spaciousness and precise typography rather than vibrant color. Interactions are subtle, often indicated by a faint border change or a ghost button. The overall impression is one of restraint and architectural clarity, with content taking center stage on a light, unadorned canvas.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, primary text color for ghost buttons |
| Lead Text | #000000 | neutral | Primary text color for headings and body text on light backgrounds |
| Ghost Border | #e5e7eb | neutral | Subtle borders for cards, list items, navigation links, and ghost buttons |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| ABCROM | Montserrat | 400 | 14px | 1.40 | Primary typeface for all text elements. Its singular weight and size observed across various contexts (navigation, headings, body text, buttons) suggests an intentional uniformity, prioritizing clarity and directness over typographic hierarchy. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.4 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "9999px"
  },
  "elementGap": "20px",
  "sectionGap": "112px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Link

**Role:** Navigation, interactive elements

A ghost link with Lead Text (#000000) on a Canvas White (#ffffff) background. Activated state is indicated by a subtle Ghost Border (#e5e7eb) under the text. Uses ABCROM 14px, weight 400.

### Circular Ghost Button

**Role:** Primary interactive element, typically for calls to action or navigation.

A button with Canvas White (#ffffff) text on a transparent background, featuring a subtle Ghost Border (#e5e7eb) of 1px. The radius is extreme (9999px) for a pill-like or circular shape. Uses ABCROM 14px, weight 400. Padding is implicitly minimal, focusing on the text and border.

### List Item with Border

**Role:** Structured content lists or navigation menus.

List items that use ABCROM 14px, weight 400 Lead Text (#000000) and are often bordered by Ghost Border (#e5e7eb) on one or more sides to create distinct divisions.

## Do's

- Prioritize Canvas White (#ffffff) for all primary backgrounds to maintain the light, expansive canvas.
- Use Lead Text (#000000) for all textual content to ensure high contrast against light backgrounds.
- Implement Ghost Border (#e5e7eb) for all subtle dividers, card outlines, and interactive element states.
- Apply a 9999px border-radius to all buttons for a highly rounded, distinct shape.
- Maintain a clear elementGap of 20px between interactive elements and content blocks.
- Utilize ABCROM 14px, 400 weight for all typography, embracing a uniform and disciplined textual hierarchy.
- Emphasize large sectionGap of 112px to create significant visual breathing room between major content blocks.

## Don'ts

- Avoid introducing new chromatic colors; the palette is strictly neutral-focused.
- Do not use heavy shadows or gradients; rely on discreet borders and spacing for visual separation.
- Do not deviate from the ABCROM typeface or its singular observed weight and size.
- Avoid tight spacing; maintain the open and airy feel established by the 20px element gap and 112px section gap.
- Do not use square or minimally rounded corners for interactive elements; the 9999px radius is a signature visual cue.

## Custom Sections

### Agent Prompt Guide

primary action: no distinct CTA color

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513976098-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513976098-thumb.jpg |
