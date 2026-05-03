# North Kingdom — Refero Style

- Refero URL: https://styles.refero.design/style/145e70b3-e0a4-4fbd-8d9e-23bd93dd0021
- Site URL: https://www.northkingdom.com
- ID: 145e70b3-e0a4-4fbd-8d9e-23bd93dd0021
- Theme: dark
- Industry: design
- Created: 2026-04-30T02:55:31.086Z
- Ranks: newest: 266, popular: 1115, trending: 1051

> Cinematic Night Canvas

## Description

North Kingdom presents a dark, cinematic brand experience that marries deep, dark backgrounds with sharp, white typography. The design emphasizes content through dramatic scaling of text and minimal UI elements, creating a focused, immersive feel. Surface treatments are largely flat with subtle layering, relying on bold text and large visuals to convey impact rather than intricate component styling. Typography carries significant weight in establishing brand presence, particularly in prominent headlines.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #050311 | neutral | Page and section backgrounds, dark surface base, subtle border accents for text elements |
| Ghost White | #ffffff | neutral | Primary text, headers, interactive elements, navigation links, button outlines — serves as the dominant foreground color against dark backgrounds |
| Pitch Black | #000000 | neutral | Card backgrounds, secondary surface accents, contrast for specific button text |
| Dusty Slate | #9b9aa0 | neutral | Medium-contrast borders, control outlines, and structural separators. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| FKGroteskNeue | system-ui, sans-serif | 400 | 24px | 1.15, 1.70 | General text, links, body copy, and navigation. Its slightly condensed and tabular figures give a precise, digital aesthetic. |
| Arial | system-ui, sans-serif | 400 | 13px | 1.20 | Small functional text within buttons and icons, maintaining legibility at compact sizes. |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "input": "26px",
    "buttons": "4px",
    "general": "8px"
  },
  "elementGap": "10px",
  "sectionGap": "80px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Border Button

**Role:** Interactive element (e.g. video controls)

Transparent background, Ghost White text, 1px Ghost White border, 4px border-radius. Padding is minimal at 7px all around. Used for secondary actions and video player controls.

### Circular Play Button

**Role:** Video player control

Circular button with 50% border-radius, Pitch Black text on a Ghost White background. Minimal padding 1px vertical, 6px horizontal. Primarily used for embedded media playback.

### Muted Ghost Button

**Role:** Tertiary interactive state

Transparent background, muted Ghost White text (60% opacity), minimal padding 1px vertical, 6px horizontal. Used for less prominent actions, like 'Unmute Mute' controls.

### Feature Card

**Role:** Content display

Pitch Black background, 8px border-radius, with no internal padding; content is expected to manage its own spacing. Used to frame large content blocks like project showcases.

### Text Input

**Role:** Form entry

Transparent background, Ghost White text, 1px Ghost White border with a generous 26px border-radius, indicating a pill-shaped input. No internal padding defined at the component level.

### Badge/Label

**Role:** Categorization or decorative text

Transparent background, Ghost White text, no border-radius defined at this level, but has a significant bottom padding of 62px, used possibly for vertically aligning text within a larger layout.

## Do's

- Use Midnight Ink (#050311) as the default background for most page sections.
- Prioritize Ghost White (#ffffff) for all primary text, headlines, and active interactive elements to ensure high contrast against dark backgrounds.
- Apply 8px border-radius consistently to all cards and significant image containers.
- Enclose all buttons with a 4px border-radius, even when the button implicitly forms a circle.
- Ensure large headlines leverage the FKGroteskNeue font to maintain the distinct heavy yet precise typographic style.
- Maintain a compact element spacing of 10px between minor UI elements to keep information dense.
- Outline all interactive buttons with a Ghost White (#ffffff) border if not using a solid fill.

## Don'ts

- Avoid using highly saturated accent colors that deviate from the dark, monochrome palette.
- Do not introduce strong shadows or excessive elevation; maintain a generally flat and layered UI aesthetic.
- Do not use generic system fonts for prominent headlines; utilize FKGroteskNeue for brand consistency.
- Avoid large gaps between closely related UI elements; maintain a compact, dense arrangement where appropriate.
- Do not use highly rounded corners for general elements; reserve 26px radius for specific inputs and 4-8px for cards/buttons.
- Do not use standard paragraph spacing for headlines; large headlines are expected to have tight line heights and letter-spacing.
- Avoid full-width content blocks without internal padding; use the specified 140px horizontal padding for content within major sections.

## Imagery

This design system primarily uses captivating, often game-related, conceptual 3D renders or stylized illustrations, frequently presented within hexagonal or irregularly masked cutouts. Images are typically large, serving as focal points rather than decorative backdrops. When photography is used, it often maintains a dark, moody atmosphere with a focus on product or conceptual scenes. Icons are simple, filled, and monochromatic (white against dark), embodying a functional, minimal style. The visual density heavily leans towards large imagery dominating sections, with text supporting the visual impact.

## Similar Brands

| Business | Why |
| --- | --- |
| Riot Games | Uses dark themes with strong typographic branding and cinematic imagery to convey a gaming aesthetic. |
| Unity (website) | Dark theme, prominent use of 3D renders and strong headlines, minimal UI elements to emphasize content. |
| Epic Games | Employs dark backgrounds and large, impactful visuals with strong typography to market creative and gaming projects. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #050311
border: #ffffff
accent: no distinct accent color
primary action: #ffffff (filled action)

Example Component Prompts:
1. Create a Hero Headline: Ghost White (#ffffff) text, using FKGroteskNeue at large sizes (e.g., 96px, 1.15 line height, -0.0100em letter-spacing) against a Midnight Ink (#050311) background. Follow general element spacing guidelines if a visual element is present.
2. Create a Ghost Border Button: Ghost White (#ffffff) text, 1px Ghost White (#ffffff) border, 4px border-radius, with a transparent background. Padding 7px all sides, using FKGroteskNeue font.
3. Create a Feature Card: A Pitch Black (#000000) background, 8px border-radius, with no padding inside. This card should contain a large image or visual element that fills the card from edge to edge.
4. Create a Navigation Link: Ghost White (#ffffff) text, using FKGroteskNeue, letter-spacing -0.0100em, with 24px vertical and horizontal padding around the link if part of a list, against a Midnight Ink (#050311) header background.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517713799-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517713799-thumb.jpg |
