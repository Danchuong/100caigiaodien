# Rogie King — Refero Style

- Refero URL: https://styles.refero.design/style/2b67c471-ff5c-4443-9f8d-e704b6bb5236
- Site URL: https://rog.ie
- ID: 2b67c471-ff5c-4443-9f8d-e704b6bb5236
- Theme: light
- Industry: design
- Created: 2026-04-30T03:42:12.167Z
- Ranks: newest: 89, popular: 770, trending: 659

> Warm parchment memoir

## Description

Rogie's personal site uses a warm, vintage digital aesthetic. Information is presented through structured lists and subtly outlined elements on a light parchment-like background. Typography is compact and precise, with distinct color accents highlighting interactive elements and key information, creating a personal yet organized feel. Custom icon borders and subtle gradients add an expressive, handcrafted touch.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Parchment | #ededed | neutral | Page background canvas for a subtly aged, neutral base |
| Graphite | #101010 | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Mist | #666666 | neutral | Secondary text for less prominent information and list item borders; Decorative background gradient used for visual separation or stylized elements |
| Cloud | #999999 | neutral | Tertiary text for metadata like years and minor details |
| Ghost White | #ffffff | neutral | Content background and accent text for high contrast elements |
| Amber Dust | #dabfa6 | neutral | Subtle background for input fields and other recessed surfaces |
| Clay Ochre | #cebfb1 | neutral | Border color for input fields and decorative outlines |
| Forest Green | #b9fd80 | accent | General accent color as hinted by for dynamic states and highlights |
| Terracotta | #895d36 | brand | Decorative text and object borders, creating a warm, earthy emphasis |
| Deepwater Blue | #00a2c2 | brand | Outlined links and icon borders, signifying interaction and emphasis with a cool contrast |
| Firebrick Red | #ed2720 | brand | Red accent for outlined action borders, linked labels, and lightweight interactive emphasis. |
| Blush Pink | #f67777 | brand | Background for specific callouts or sections, adding a soft, vivid touch |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | Inter | 400, 500, 700 | 9px, 11px, 12px, 14px | 1.00, 1.10, 1.14, 1.20, 1.45, 1.60 | Primary typeface for all UI text, body copy, and less prominent headings, providing a contemporary, readable base. |
| isg | Montserrat | 500, 700 | 14px | 0.86 | Custom typeface for specific interactive links and callouts, featuring a tightly packed, distinctive character for emphasis without overwhelming. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.2 |  |
| body-sm | 12 | 1.2 |  |
| body | 14 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "inputs": "40px",
    "default": "2px",
    "interactive": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "32px",
  "cardPadding": "16px",
  "pageMaxWidth": "400px"
}
```

## Components

### Project List Item

**Role:** Organized display of project entries with year details.

Text in Graphite at 14px Inter with a 0.10em letter-spacing. Features a 1px solid Mist border on its bottom edge. Icons are left-aligned with 1px margin-right.

### Segmented Input

**Role:** Stylized input or tag with rounded corners for visual distinction.

Background in Amber Dust with a 1px solid Clay Ochre top border and a 40px border-radius. Text is Graphite at 16px Inter, no padding. Includes an inset shadow: rgba(255, 255, 255, 0.35) 0px 1px 0.5px 0px, rgba(0, 0, 0, 0.15) 0px 0.5px 2px 0px inset.

### Accent Outlined Link (Deepwater Blue)

**Role:** Interactive text link, drawing attention with an outlined style.

Text in Deepwater Blue with a 1px solid Deepwater Blue border. The typography uses the custom 'isg' font at 14px, weight 500, with 0.10em letter-spacing. Padding of 40px left and 12px right, with an 8px border-radius.

### Accent Outlined Link (Firebrick Red)

**Role:** Interactive text link, drawing strong attention for sensitive or key terms.

Text in Firebrick Red with a 1px solid Firebrick Red border. The typography uses the custom 'isg' font at 14px, weight 500, with 0.10em letter-spacing. Padding of 40px left and 12px right, with an 8px border-radius.

### Subtle Text Input

**Role:** Neutral input field for standard data entry.

Inherits default text color. Has no background color and uses a 1px solid Graphite border. No border-radius.

## Do's

- Use Parchment (#ededed) as the primary page background.
- Apply Graphite (#101010) for main headings and interactive text to ensure strong contrast.
- Emphasize critical links or terms with Firebrick Red (#ed2720) or Deepwater Blue (#00a2c2) using the 'isg' font and outlined style.
- Maintain comfortable line spacing with Inter at 1.45 for body text and 1.20 for lists and shorter content.
- Structure content within a 400px max-width container, centered on the page.
- Separate primary sections with a 32px vertical gap.
- Use 8px radius for interactive elements and 40px radius for input fields to differentiate their feel.

## Don'ts

- Avoid using highly saturated backgrounds for large content areas; reserve them for small accent callouts like Blush Pink (#f67777).
- Do not deviate from the Inter and isg font families; generic system fonts will conflict with the precise letter-spacing.
- Do not introduce complex, multi-level shadows; the singular soft inset shadow for inputs is the only significant elevation.
- Avoid large, uncontained images; all visuals should be tightly integrated, often with borders or within structured components.
- Do not create filled buttons or primary actions with backgrounds; interactive states are conveyed through text color changes and subtle borders.
- Do not use letter-spacing values other than 0.10em for Inter and isg fonts for consistency.

## Layout

The page model is contained, centered within a max-width of 400px, which creates a focused, column-like reading experience. The hero consists of a centered text block with a prominent headline and supporting paragraphs. Sections are generally stacked vertically with a consistent 32px gap, often featuring a main heading followed by structured lists or content blocks. There are no alternating light/dark bands; the background remains consistently Parchment. Content arrangement is primarily vertical stacking of text and lists, with some exceptions like the movie cover carousel. Grid usage is visible in the movie flick display, though specific column counts are implied by image arrangement rather than explicit data. The layout is comfortable and intentionally uncrowded, allowing each content block to breathe. Navigation is minimal, likely a sticky header not fully visible here.

## Imagery

Imagery is minimal and contextual, focused on clear, contained product shots or content previews (e.g., movie covers). Photography and illustrations are used as small, framed elements rather than full-bleed backgrounds. Corners are generally sharp, though some accent elements may feature rounded forms. Icons are typically monoline and subtle, often outlined in brand colors to provide functional cues without visual dominance. The role of imagery is primarily explanatory and decorative, providing visual breaks and context rather than leading the narrative. Visual density is text-dominant, with images serving as carefully placed punctuation.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Minimal, text-focused content presentation on a light background, emphasizing information structure. |
| Derek Sivers' Site | Personal website aesthetic with simple typography and content-first layout, often on a subdued background. |
| Notion | Structured lists, subtle borders, and a focus on readable text hierarchy over heavy graphical elements. |
| Readwise Reader | Clean, light UI for reading with a strong emphasis on typography and minimal ornamental graphics. |
| Substack | Content-centric design, typically with a light theme, strong typography, and minimal interaction indicators. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #101010
background: #ededed
border: #101010
accent: #b9fd8e
primary action: #00a2c2 (outlined action border)

Example Component Prompts:
1. Create a 'Project List Item' component: Text 'Figma Draw' in Graphite (#101010) at 14px Inter. Add a 1px solid Mist (#666666) border to the bottom. Place a subtle icon to the left with 1px margin-right.
2. Design an 'Accent Outlined Link (Deepwater Blue)': Text 'Illustration' in Deepwater Blue (#00a2c2), using the 'isg' font at 14px weight 500, with 0.10em letter-spacing. Apply a 1px solid Deepwater Blue border, 40px left padding, 12px right padding, and an 8px border-radius.
3. Implement a 'Segmented Input': Background in Amber Dust (#dabfa6), top border 1px solid Clay Ochre (#cebfb1), with a 40px border-radius. Text in Graphite (#101010). Include the inset shadow: rgba(255, 255, 255, 0.35) 0px 1px 0.5px 0px, rgba(0, 0, 0, 0.15) 0px 0.5px 2px 0px inset.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520511840-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520511840-thumb.jpg |
