# Design — Refero Style

- Refero URL: https://styles.refero.design/style/bbfbe753-a417-43ec-9af7-ef6c08a5140d
- Site URL: https://design.cash.app
- ID: bbfbe753-a417-43ec-9af7-ef6c08a5140d
- Theme: dark
- Industry: fintech
- Created: 2026-04-30T00:38:05.585Z
- Ranks: newest: 743, popular: 1103, trending: 1030

> Dark mode precision, neon punctuation

## Description

Cash App's design system navigates between stark order and vibrant expression, built on a dark theme that leverages high contrast and precise typographic control. The core palette is achromatic, allowing saturated brand colors to serve as energetic accents within a highly structured environment. Typography is prominent, employing large, confident sizes and distinctive letter-spacing. UI elements are rendered with minimal visual embellishment, emphasizing function and content, with interaction indicated by subtle borders and color shifts.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Black | #000000 | neutral | Primary text, icon fills, page backgrounds (dominant for text/icons, secondary for canvas) |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, high-contrast text and icon fills against dark backgrounds |
| Ghost Border | #e5e7eb | neutral | Subtle borders for outlined elements, dividers, ghost buttons, and list item separators – providing structure without heavy lines |
| Subtle Gray | #858585 | neutral | Muted text, secondary labels, disabled states, supporting information |
| Hinting Gray | #b3b3b3 | neutral | Placeholder text, tertiary information, subtle icon tones |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| CashSans | system-ui | 400, 500, 700 | 10px, 12px, 16px, 86px, 117px, 122px | 1.00, 1.50 | Primary brand typeface, used across all text elements from body to display headlines. Its tailored tracking ensures visual tightness even at large sizes. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 |  |
| body-sm | 12 | 1.5 |  |
| body | 16 | 1.5 |  |
| body-lg | 86 | 1.3 |  |
| heading-sm | 117 | 1.3 |  |
| heading | 122 | 1.3 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "images": "15px",
    "buttons": "0px"
  },
  "elementGap": "12px",
  "sectionGap": "64px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Button

**Role:** Navigation items and secondary actions without visual hierarchy

Transparent background, Ghost Border around the bottom for emphasis, Midnight Black text, 0px border-radius, `CashSans` font, 10px vertical padding, 10px horizontal padding.

### Plain Card

**Role:** Container for content; appears as a content block within the page structure

Transparent background, no border, no box shadow, 0px border-radius, 0px padding inside. Renders content directly without a distinct container style.

### Image with Rounded Corners

**Role:** Visual content container with minimal styling aside from radius

Images are displayed with a 15px border-radius, without any border or shadow.

## Do's

- Prioritize high contrast using Midnight Black and Canvas White for text and backgrounds.
- Use Ghost Border (#e5e7eb) for subtle structural elements like dividers and non-primary button outlines, not for solid fills.
- Apply Cash Lime (#00d533) sparingly as a functional accent for interactive states or key brand moments.
- Employ the CashSans font family at specified weights and sizes, ensuring the global -0.0150em letter-spacing is applied.
- Maintain 0px border-radius for buttons and cards, preserving a structured and sharp aesthetic.
- Utilize 12px as the standard element gap for horizontal and vertical spacing between most UI elements.
- Set section gaps at 64px to create clear visual separation between major content blocks.

## Don'ts

- Avoid using saturated colors other than Cash Lime, unless explicitly defined as semantic status colors.
- Do not introduce heavy box shadows or gradient overlays, as the system relies on flat surfaces and minimal elevation.
- Refrain from deviating from the 0px border-radius for interactive components like buttons and cards.
- Do not use generic system fonts; always default to CashSans for brand consistency.
- Avoid excessive padding within card components, as they are designed to be content-forward without ornate frames.
- Do not allow text to have low contrast; ensure sufficient contrast ratios for readability, especially for Subtle Gray and Hinting Gray.
- Do not use multiple font families; restrict typography to CashSans only.

## Layout

The page primarily uses a full-bleed structure without a defined `pageMaxWidth`, suggesting content can span the full viewport. However, content elements and sections appear to be intentionally spaced using a `64px` section gap. The hero pattern is not explicitly visible but the overall feel suggests a dark canvas with strong typographic elements. Content arrangement appears to be linear, with distinct sections vertically stacked and internally structured by strong use of borders and whitespace. Navigation elements are likely a top bar or side panel given the structured nature, with minimal visual emphasis allowing content to dominate.

## Imagery

Imagery use is minimal, with the provided screenshot indicating image blocks with rounded corners. If photography or illustration is introduced, it should be contained within these structured blocks. The primary visual language seems to be UI-focused, leaning towards text and simple icons/shapes rather than rich graphical elements. Icons are likely filled or outlined, inheriting color from the parent text context, and contribute to the structured typographic field.

## Similar Brands

| Business | Why |
| --- | --- |
| Revolut | Dark-mode UI with high contrast and reliance on a single vivid accent color for interactive elements. |
| Acme Inc. (fictional) | Strong emphasis on custom typography and precise letter-spacing to define brand identity, rather than decorative elements. |
| Stripe | Minimalist aesthetic, with a focus on functional UIs, subtle borders, and precise spacing over heavy visual adornments. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #e5e7eb
accent: #00d533
primary action: no distinct CTA color

Example Component Prompts:
1. Create a page section: Canvas White background. Headline at 122px CashSans weight 700, Midnight Black color, letter-spacing -0.0150em. Below, a paragraph of text at 16px CashSans weight 400, Subtle Gray color, with 1.5 line-height. Ensure 64px vertical spacing between the headline and the text.
2. Create a Ghost Navigation Button: Transparent background. Text 'Foundations' using Midnight Black, CashSans weight 400, 0px border-radius. Add a 1px solid Ghost Border (#e5e7eb) only to the bottom edge. Apply 10px padding vertically and 10px horizontally.
3. Create an image display: Use an image with a 15px border-radius. Ensure no border or shadow is applied. The element should have a 12px horizontal element gap from adjacent content.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509469153-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509469153-thumb.jpg |
