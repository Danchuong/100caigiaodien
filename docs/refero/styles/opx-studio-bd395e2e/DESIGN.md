# OPX Studio — Refero Style

- Refero URL: https://styles.refero.design/style/bd395e2e-58a8-4626-acfa-9be8d6cdf604
- Site URL: https://opx.studio
- ID: bd395e2e-58a8-4626-acfa-9be8d6cdf604
- Theme: dark
- Industry: agency
- Created: 2026-04-30T03:13:32.279Z
- Ranks: newest: 203, popular: 1156, trending: 1172

> Deep night canvas

## Description

OPX Studio employs a high-contrast, minimalist dark aesthetic, making content feel bold and impactful. The design prioritizes stark text-heavy layouts on a deep black canvas, with subtle gray borders and accents to define interactive elements. Photography and visuals are given prominence within these dark sections, often full-bleed. Typography is confident and direct, relying on strong weights and generous letter-spacing to command attention.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight | #020202 | neutral | Page background, primary surface for content blocks |
| Void Black | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Ghost Gray | #292a2c | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Snow | #ffffff | neutral | Primary text color for headlines and body copy, hover state for ghost buttons, primary border for ghost buttons |
| Slate Mist | #9b9b9b | neutral | Muted helper text, secondary navigation text, subtle decorative borders |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Open Sans | Noto Sans | 400 | 18px | 1.67 | Standard body text for descriptive content. Its common availability balances the custom typeface for readability. |
| OPX-Medium | Montserrat | 400 | 18px, 20px, 26px, 35px, 50px, 80px, 111px | 1.00, 1.07, 1.21, 1.29, 1.38, 1.40, 1.42, 1.73 | Headlines, navigation, main body copy, and link text where impact is needed. Its singular weight at varying sizes creates a very formal, architectural hierarchy. |
| Untitled | Inter | 500 | 14px | 1.67 | Small, functional link text. Its slightly bolder weight ensures legibility even at smaller sizes in the dark theme. |
| Helvetica |  | 400 | 18px | 1.67 | Helvetica — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.67 |  |
| body | 18 | 1.67 |  |
| subheading | 20 | 1.42 |  |
| heading-sm | 26 | 1.4 |  |
| heading | 35 | 1.38 |  |
| heading-lg | 50 | 1.29 |  |
| display | 80 | 1.21 |  |
| display-lg | 111 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "45px",
    "buttons": "45px"
  },
  "elementGap": "20px",
  "sectionGap": "100px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Outlined clickable element for secondary actions and case study links.

Text: Void Black (#000000), OPX-Medium 18px. Border: 1px solid Snow (#ffffff), 45px radius. Padding: 7px vertical, 30px horizontal.

### Navigation Link

**Role:** Primary navigation item.

Text: Snow (#ffffff), OPX-Medium 111px. Hover state changes text to Ghost Gray (#292a2c). No background or explicit padding, relies on high font size for separation.

### Footer Link

**Role:** Informational links in the footer.

Text: Slate Mist (#9b9b9b), Untitled 500 at 14px for main info, Open Sans 400 at 18px for social links. No distinct background or border.

### Content Card Headline

**Role:** Headline for project previews.

Text: Snow (#ffffff), OPX-Medium at 26px for project titles. Paired closely with Ghost Button below.

## Do's

- Always use Midnight (#020202) for primary page backgrounds to maintain the dark canvas theme.
- Utilize Snow (#ffffff) for all main headings and primary body text to ensure maximum contrast.
- Apply Ghost Gray (#292a2c) to borders and secondary interactive elements for subtle definition.
- Implement a 45px border-radius for all interactive components like buttons and cards to preserve the soft, rounded aesthetic.
- Maintain generous vertical spacing with 100px between major sections to emphasize content segmentation.

## Don'ts

- Avoid introducing bright or saturated colors beyond imagery, as the system relies on a high-contrast achromatic palette.
- Do not use small line heights for display typography; maintain the defined line heights for OPX-Medium to ensure strong visual impact and clarity.
- Do not use box-shadows or elevation effects, as the system achieves visual depth through color contrast and spacing.
- Never use less than 20px of padding around content within confined elements.
- Do not vary from the specific text color choices for primary or secondary text; Snow and Slate Mist define the text hierarchy.

## Layout

The page primarily uses a max-width contained layout alternating with full-bleed sections for imagery. The hero section features a centered headline over a full-width background, setting a bold, direct tone. Content often arranges in two-column layouts, with text-left and visual-right, or stacked centered blocks. There's a subtle grid for project showcases, featuring 3-column cards. Vertical spacing between sections is consistently large, creating a spacious and intentional rhythm. Navigation is minimal, consisting of a sticky top bar with two main links.

## Imagery

The site uses high-quality, often full-bleed photography and product mockups. Imagery is typically well-lit against dark or neutral backgrounds, showcasing product UI or professional-looking scenes with a focus on human interaction. Visuals serve an explanatory or showcase role, often appearing as large blocks that break up the text. Icons are minimal, outlined, and monochromatic, integrated within the text for decorative accents or link indicators.

## Custom Sections

### Agent Prompt Guide

primary action: no distinct CTA color

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518801100-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518801100-thumb.jpg |
