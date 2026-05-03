# Spécialiste Belge — Refero Style

- Refero URL: https://styles.refero.design/style/a6729614-4079-4275-ad22-cee04d90ba0c
- Site URL: https://misuko.be
- ID: a6729614-4079-4275-ad22-cee04d90ba0c
- Theme: light
- Industry: other
- Created: 2026-04-30T01:58:04.472Z
- Ranks: newest: 478, popular: 729, trending: 633

> Organic minimalism, gentle contrast.

## Description

Misuko's design system evokes a calm, natural modernity, reminiscent of bespoke packaging. It builds on a stark light canvas with rich dark typography, punctuated by a recessive, earthy accent color. The visual identity emphasizes spaciousness and precise detailing, using subtle textural shifts in backgrounds and minimal borders to define discrete content blocks without heavy visual weight. Components are designed for clarity and understated presence, allowing content and product imagery to take precedence.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Almond | #fcf9ee | neutral | Page background, primary surface for most content blocks, provides a warm, natural base |
| Soft Vanilla | #f2efe3 | neutral | Secondary background for cards, slight elevation from the canvas layer, used for subtle grouping |
| Deep Licorice | #000000 | neutral | Primary text, headings, icons, navigation links, and subtle button borders — provides strong contrast against light backgrounds |
| Light Pebble | #bcbab2 | neutral | Input borders, subtle dividers, and contextual UI elements — a soft, almost imperceptible line |
| Charcoal Gray | #6a6965 | neutral | Muted text, secondary information, and card borders — offers lower contrast for less prominent content |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Beausite | Inter | 400, 500 | 14px, 21px, 30px, 34px, 48px | 0.97, 1.08, 1.12, 1.20, 1.29, 1.36, 1.79, 2.86 | Primary brand typeface for all headings, body text, and UI elements. Its clean, geometric form with subtle humanist touches creates a sense of modern refinement. The specific stylistic sets ('ss02', 'ss04', 'ss05') are integral to its unique character, providing brand distinction. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.79 | -0.28 |
| subheading | 21 | 1.36 | -0.5 |
| heading | 30 | 1.2 | -0.66 |
| heading-lg | 34 | 1.12 | -0.73 |
| display | 48 | 0.97 | -1.73 |

## Spacing & Shape

```json
{
  "radius": {
    "links": "20px"
  },
  "elementGap": "17px",
  "sectionGap": "20px",
  "cardPadding": "34px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Interactive element

Text-only button for secondary actions or navigation, transparent background against the current surface. Uses Deep Licorice for text. No distinct padding, relying on natural text spacing.

### Outlined Call-to-Action Button

**Role:** Primary interactive element

Features a transparent background with a 1px Deep Licorice border. Has 20px padding on all sides and a 0px border-radius, maintaining a sharp, defined edge. Text is Deep Licorice and uses a 500 weight Beausite.

### Content Card

**Role:** Information grouping and display

Background is Soft Vanilla with no border or shadow, providing a subtle lift from the Canvas Almond base. Incorporates 34px padding on all sides for internal content. Used for feature listings or informational blocks.

### Informational Card (Padded)

**Role:** Detailed content display

Transparent background with no border or shadow. Contains 34px padding on all sides, useful for content blocks that require more breathing room within a larger section. Often paired with Charcoal Gray text for secondary information.

### Text Input Field

**Role:** User data entry

Transparent background with a 1px Light Pebble bottom border. Features 9px top/bottom padding and 17px left padding. Text and placeholder text are Deep Licorice. Focus state shows a Deep Licorice border.

### Rounded Action Link

**Role:** Inline navigation or primary call to action

A text link with a 20px border-radius, giving it a pill-like appearance. Text is Deep Licorice, often underlined on hover, indicating interaction. No explicit background color, inheriting from its parent.

## Do's

- Prioritize text content against Canvas Almond (#fcf9ee) or Soft Vanilla (#f2efe3) backgrounds to ensure high readability.
- Use Beausite font family with specified `font-feature-settings` for all text elements to maintain brand distinctiveness.
- Define content sections primarily through subtle background color shifts between Canvas Almond (#fcf9ee) and Soft Vanilla (#f2efe3), rather than heavy borders or shadows.
- Apply Deep Licorice (#000000) for all primary text, headings, and outlines of interactive elements to maintain high contrast and clarity.
- Maintain generous spacing, with 17px for `elementGap` and 34px for `cardPadding`, creating an open and airy feel.
- Utilize Charcoal Gray (#6a6965) for all secondary and tertiary information to create a visual hierarchy without visual clutter.
- All interactive links that convey an action should have a 20px border-radius to adopt the signature rounded pill shape.

## Don'ts

- Avoid using bold, saturated colors for backgrounds or large areas; confine color to subtle accents or imagery.
- Do not introduce strong drop shadows; the system relies on minimal elevation and background shifts.
- Do not deviate from the Beausite typeface or its specific font feature settings; it is critical to brand identity.
- Avoid tight element spacing; the 'comfortable' density is a core characteristic of the layout.
- Do not use generic system fonts; the custom 'Beausite' font is a cornerstone of the visual style.
- Do not use square or rectangular buttons or links for primary actions; the 20px `border-radius` is a key brand identifier for interactive elements.

## Layout

The page maintains a centered max-width content area, ensuring readability and visual focus. The hero section is a split layout with text on the left and full-bleed imagery on the right. Content sections generally follow a consistent vertical rhythm with comfortable spacing, often alternating between left-aligned text blocks and right-aligned visuals or feature lists. A prominent pattern includes 3-column card grids for features, all with consistent padding. The navigation is a sticky top bar, minimally interrupting the content flow.

## Imagery

The site primarily uses product photography and lifestyle imagery, often featuring food and drink. Photography is generally high-key with soft lighting, sometimes on plain white or desaturated backgrounds (like the cardboard boxes). Product imagery is tightly cropped, showcasing the items without excessive context. Small decorative icons are largely line-based with a thin stroke, typically rendered in Deep Licorice outlines or using the brand's primary text color to integrate seamlessly with the UI, serving an explanatory role rather than a heavy decorative one. Density of imagery is moderate, balancing descriptive visuals with ample negative space.

## Similar Brands

| Business | Why |
| --- | --- |
| Oatly | Shares a sophisticated, natural product aesthetic with clean typography and a muted color palette focused on creamy neutrals. |
| Harry's | Exhibits a similar commitment to refined, minimal product presentation, utilizing custom typography and a precise, spacious layout. |
| Aesop | Echoes the use of elegant, slightly unconventional typography and a monochrome-plus-earth-tone palette for a premium, understated feel. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #fcf9ee
border: #bcbab2
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a Hero Section: Background is Canvas Almond (#fcf9ee). Heading is Beausite weight 400 at 48px, color Deep Licorice (#000000), letter-spacing -1.73px. Body text is Beausite weight 400 at 14px, color Deep Licorice (#000000), letter-spacing -0.28px. Below body text, add a Rounded Action Link with 'Let's get in touch' text, using Deep Licorice (#000000) for text color and 20px border-radius.
2. Create a Content Card for features: Background Soft Vanilla (#f2efe3), no border or shadow, 34px padding. Inside, use a heading Beausite weight 500 at 30px, color Deep Licorice (#000000), letter-spacing -0.66px. Body text Beausite weight 400 at 14px, color Charcoal Gray (#6a6965), letter-spacing -0.28px.
3. Create an Input Field: Transparent background. Bottom border is 1px Light Pebble (#bcbab2). 9px vertical padding, 17px left padding. Text in Deep Licorice (#000000), using Beausite weight 400 at 14px, letter-spacing -0.28px for both text and placeholder. Label above input is Deep Licorice (#000000) and Beausite weight 400 at 14px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514261889-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514261889-thumb.jpg |
