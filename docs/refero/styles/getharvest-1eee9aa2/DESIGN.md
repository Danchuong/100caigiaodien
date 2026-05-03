# Getharvest — Refero Style

- Refero URL: https://styles.refero.design/style/1eee9aa2-1e23-4675-9f6e-fb98c93969bd
- Site URL: https://www.getharvest.com
- ID: 1eee9aa2-1e23-4675-9f6e-fb98c93969bd
- Theme: light
- Industry: productivity
- Created: 2026-04-30T01:01:22.577Z
- Ranks: newest: 643, popular: 897, trending: 780

> Warm, organized workspace: like an inviting desk with neatly arranged tools and a single, bright sticky note.

## Description

Harvest projects a dependable, organized workspace aesthetic, blending understated neutrals with a single vibrant orange accent. The primary visual tension arises from the interplay of a clean, spacious layout and rich, textured data visualizations. Surfaces are primarily crisp white, occasionally warmed by a subtle cream, with a focus on soft, rounded corners rather than hard edges. Typography is approachable yet confident, often using a slightly wider letter-spacing for an open feel, contrasting with compact, data-rich interfaces.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Amber Glow | #fa5d00 | brand | Primary action buttons, interactive elements, brand highlights — a warm red-orange that signifies activity and focus |
| Harvest Cream | #fff8f1 | neutral | Subtle background for cards, embedded sections, and visual containment, providing a soft contrast to white |
| Deep Graphite | #1d1e1c | neutral | Primary text, headings, and significant UI elements — a very dark, almost black, for strong readability |
| Canvas White | #ffffff | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Soft Fog | #c0bbb6 | neutral | Input borders, subtle dividers, and non-intrusive UI boundaries |
| Pale Sand | #e3d6c5 | neutral | Subtle shadow tint for cards, adding a delicate warmth to elevated elements |
| Muted Stone | #8e8b87 | neutral | Secondary text, descriptive labels, and less prominent UI elements |
| Link Gray | #615f5c | neutral | Muted link text and subtle icons, providing less emphasis than primary text |
| Light Steel | #d9d9d9 | neutral | Hairline borders and separators, providing minimal visual interruption |
| Golden Wash | #fee3b5 | accent | Accent for card shadows — a faint golden hue that echoes the primary brand color |
| Mid Slate | #777571 | neutral | Tertiary text and subtle informational elements |
| Dark Slate | #4a4a47 | neutral | Darker decorative borders and occasional icon fills |
| Subtle Gray | #a5a19c | neutral | Even lighter secondary text and subtle boundary accents |
| Text Gray | #999999 | neutral | Placeholder text and very muted labels |
| Shadow Tint | #ccc6c1 | neutral | Base for subtle button shadows, often combined with an alpha value |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| MuotoWeb | Inter | 400, 500, 600, 700 | 13px, 14px, 16px, 17px, 18px, 20px, 22px, 24px, 25px, 26px, 28px, 34px, 48px, 50px | 1.00, 1.10, 1.15, 1.20, 1.26, 1.30, 1.35, 1.38, 1.40, 1.50 | Primary UI font for body text, navigation, forms, and most headings — its slightly wider tracking contributes to the open and breathable aesthetic. |
| Monarch | Playfair Display | 400 | 72px | 1.20 | Display font used specifically for large, impactful headlines, offering a more traditional and grounded presence at significant scales. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.3 |  |
| heading | 22 | 1.26 |  |
| heading-lg | 28 | 1.2 |  |
| display | 72 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "20px",
    "other": "16px",
    "images": "16px",
    "inputs": "16px",
    "buttons": "16px"
  },
  "elementGap": "10px",
  "sectionGap": "30px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call-to-action button

Filled with Amber Glow (#fa5d00), white text, prominently rounded corners via 16px border-radius, generous padding. Used for primary calls to action like 'Try Harvest free'.

### Standard Content Card

**Role:** Informational content container

Rounded corners (20px), Harvest Cream background (#fff8f1), no visible border, and no shadow. Used for features or descriptive blocks.

### Elevated Content Card

**Role:** Prominent content container

Rounded corners (15px), Canvas White background (#ffffff), and a distinct golden-tinted shadow (rgba(250, 166, 0, 0.25) 6px 4px 24px 0px). Used to highlight key information or interactive elements.

### Text Input Field

**Role:** User data input

Canvas White background (#ffffff), subtle Soft Fog border (#c0bbb6), and generously rounded 16px corners. Primary text color uses Deep Graphite (#1d1e1c).

## Do's

- Prioritize Canvas White (#ffffff) or Harvest Cream (#fff8f1) for all background surfaces to maintain a light and airy feel.
- Use Amber Glow (#fa5d00) exclusively for primary interactive elements and brand accents; avoid scattering it decoratively.
- Apply Deep Graphite (#1d1e1c) for all primary text and headings to ensure strong contrast and readability.
- Maintain a 16px border-radius for buttons and inputs, and a softer 20px for content cards to unify the rounded aesthetic.
- Employ MuotoWeb as the default font across the UI, leveraging its 0.0150em letter spacing for an open typographic presence.
- Utilize 10px as the default elementGap horizontally and vertically between related UI elements for comfortable spacing.
- Ensure all interactive components have a moderate transition duration of 0.2s with an ease timing function for smooth feedback.

## Don'ts

- Do not introduce new saturated colors; the palette relies on Amber Glow (#fa5d00) as the sole chromatic accent.
- Avoid hard-edged components; all card, button, and input elements should adhere to the established border-radius values.
- Do not use heavy, dark shadows; elevation should be subtle, leveraging the Golden Wash (#fee3b5) or rgba(0, 0, 0, 0.2) tints.
- Refrain from tight, condensed typography; prioritize the slightly expanded letter spacing of MuotoWeb for all body and UI text.
- Do not use gradients on backgrounds or interactive elements; the visual system is primarily flat with subtle surface changes.
- Avoid dense, information-packed sections without generous internal padding or a Clearfix button text in Amber Glow.
- Do not use dark backgrounds for main content areas; maintain the light theme with Canvas White and Harvest Cream as primary surfaces.

## Layout

The page uses a maximum content width centered layout, rather than full-bleed, creating a contained and organized feel. The hero section often features a large, centered headline (Monarch font) over a subtle, abstract background using light, warm washes, with a call to action immediately below. Sections alternate between Canvas White and Harvest Cream backgrounds, creating a gentle visual rhythm. Content within sections favors centered stacks or two-column layouts (text alongside illustrations or cards). Feature sections often arrange content in three-column card grids. The overall density is comfortable, with generous vertical spacing between sections (around 30px). Navigation is a sticky top bar.

## Imagery

The site uses a mix of stylized product screenshots and abstract graphic elements. Product screenshots are typically rendered on white or a very light pastel background, focusing on clean UI and data visualization. Abstract graphics are subtle, organic, and often take the form of watercolor-like washes in warm, muted tones (like those suggesting Golden Wash #fee3b5 or Pale Sand #e3d6c5). Icons are primarily mono-color, Deep Graphite outlines or fills, used functionally to illustrate features. Imagery serves an explanatory and atmospheric role, rather than decorative, and never breaks out of contained, rounded forms.

## Elevation

| Element | Style |
| --- | --- |
| Primary Action Button | rgba(0, 0, 0, 0.2) 0px 1px 4px 0px |
| Elevated Content Card | rgba(250, 166, 0, 0.25) 6px 4px 24px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| FreshBooks | Shares a clean, light SaaS aesthetic with a single strong accent color for CTAs and iconography. |
| Toggl Track | Similar focus on whitespace, approachable typography, and clear functional orange/red accents in a time-tracking context. |
| Clockify | Employs a white base, rounded UI elements, and a distinct brand color to highlight actions and key information. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #1d1e1c
background: #ffffff
border: #c0bbb6
accent: #fa5d00
primary action: #fa5d00 (filled action)

Example Component Prompts:
1. Create a hero section with a centered 'Turn hours into profit' heading in Discover (#1d1e1c) at 72px Monarch 400. Below it, add a descriptive paragraph (MuotoWeb 18px 400, Muted Stone #8e8b87). Include an 'Your work email' input field (Canvas White #ffffff background, Soft Fog #c0bbb6 border, 16px radius) next to an 'Get started for free' button (Amber Glow #fa5d00 background, Canvas White #ffffff text, 16px radius, 12px 22px padding).
2. Create a 'Why Harvest' feature card: Harvest Cream (#fff8f1) background, 20px border-radius, no shadow, with 30px padding. Inside, use a bold heading (MuotoWeb 22px 700, Deep Graphite #1d1e1c) and a descriptive body paragraph (MuotoWeb 16px 400, Link Gray #615f5c). Include a 'Learn more' link (Amber Glow #fa5d00).
3. Design a data visualization container card: Canvas White (#ffffff) background, 15px border-radius, and an Elevated Card Shadow (rgba(250, 166, 0, 0.25) 6px 4px 24px 0px). Include internal padding of 20px horizontally and vertically. Populate with simulated data graphs and values in Deep Graphite (#1d1e1c) and Muted Stone (#8e8b87).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510836587-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510836587-thumb.jpg |
