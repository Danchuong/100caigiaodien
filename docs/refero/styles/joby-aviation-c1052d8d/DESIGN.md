# Joby Aviation — Refero Style

- Refero URL: https://styles.refero.design/style/c1052d8d-3663-46a4-a882-e50d9b8a1166
- Site URL: https://www.jobyaviation.com
- ID: c1052d8d-3663-46a4-a882-e50d9b8a1166
- Theme: light
- Industry: other
- Created: 2026-04-30T00:15:55.481Z
- Ranks: newest: 852, popular: 695, trending: 435

> Skyward Glide

## Description

Joby Aviation's visual system evokes a sense of aspirational flight and advanced technology. The primary design language pairs deep, saturated blues with stark white typography, creating a high-contrast, almost nocturnal-but-optimistic feel. Large, asymmetric rounded forms in backgrounds and card elements suggest fluidity and motion, while the overall spaciousness and minimal use of decorative elements keep the focus on the product's promise.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #0e1620 | neutral | Primary text, darkest backgrounds, interface borders |
| Cloud Whisper | #f5f4df | neutral | Off-white for backgrounds, secondary text, button outlines, and subtle card surfaces |
| Skybound Blue | #007ae5 | brand | Dominant brand blue for primary backgrounds, full page sections, and active navigation indicators. Conveys innovation and optimism |
| Cosmic Violet | #1c3f99 | brand | Brand accent for navigation, subtle surface backgrounds, and graphic elements. Used in conjunction with other blues |
| Sunset Orange | #eb6110 | accent | Accent for navigation elements and small graphic details |
| Horizon Blue | #083e6f | accent | Outlined button borders when interacting with light backgrounds; also used for informational icons and input borders |
| Pale Peach | #ffd9c9 | accent | Subtle accent for navigation backgrounds and decorative graphics |
| Shadow Grey | #abab9c | neutral | Used for card box shadows, providing a soft lift |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| JobyDisplay | Inter | 500, 550 | 10px, 18px, 24px, 28px, 40px, 48px, 64px, 80px, 141px, 207px | 1.00, 1.05, 1.20 | Headlines and display text. The bold weights and precise tracking convey authority and a contemporary feel. |
| jobyText | Inter | 400, 450, 500, 550 | 12px, 14px, 16px, 18px | 0.89, 1.00, 1.20, 1.30, 1.40 | Body text, navigation links, and badges. Its slightly condensed nature at smaller sizes maintains a structured, purposeful tone. |
| Arial | Arial | 400 | 13px | 1.20 | Fallback and specific utility text, primarily for buttons and icons where system legibility is prioritized. |
| Joby Sans Display | Inter | 500 | 12px | 1.20 | Used for specific body and icon text, featuring tighter tracking for a more compact impression. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1 | -0.03 |
| body | 14 | 1.3 | -0.01 |
| subheading | 18 | 1.4 | -0.01 |
| heading-sm | 24 | 1.2 | -0.02 |
| heading | 28 | 1.05 | -0.02 |
| heading-lg | 40 | 1.05 | -0.03 |
| display | 64 | 1.05 | -0.03 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "default": "8px",
    "otherLarge": "147.6px",
    "asymmetricCards": "160px 160px 0px 0px"
  },
  "elementGap": "8px",
  "sectionGap": "113px",
  "cardPadding": "40px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Button (Light Text)

**Role:** Interactive element for navigation or secondary actions, appearing on dark backgrounds.

Background: transparent (rgba(0, 0, 0, 0)), Text: Cloud Whisper (#f5f4df), Border: Cloud Whisper (#f5f4df), Radius: 0px, Padding: 0px.

### Ghost Navigation Button (Dark Text)

**Role:** Interactive element for navigation or secondary actions, appearing on light backgrounds.

Background: transparent (rgba(0, 0, 0, 0)), Text: Horizon Blue (#083e6f), Border: Horizon Blue (#083e6f), Radius: 0px, Padding: 0px.

### Feature Card (Blue BG)

**Role:** Container for showcasing features or information, using the primary brand blue.

Background: Skybound Blue (#007ae5), Text: Cloud Whisper (#f5f4df), Border Radius: 16px, Shadow: rgba(0, 0, 0, 0.3) 0px 16px 47.6px 0px, Padding: 0px. Headings use 'JobyDisplay' 550, body uses 'jobyText' 400.

### Hero Section Card

**Role:** Prominent card used in hero sections, often with asymmetric rounded corners.

Background: Skybound Blue (#007ae5), Border Radius: 160px 160px 0px 0px, Shadow: none, Padding: 0px 40px 0px 40px. Content within uses 'JobyDisplay' for titles and 'jobyText' for descriptive text, typically in Cloud Whisper.

### Ghost Input

**Role:** Input field for user entry, designed for dark backgrounds.

Background: transparent (rgba(0, 0, 0, 0)), Text/Placeholder: Cloud Whisper (#f5f4df), Border: Cloud Whisper (#f5f4df), Radius: 0px, Padding: 0px.

### Context Badge

**Role:** Small informational or labeling element.

Background: transparent (rgba(0, 0, 0, 0)), Text: Cloud Whisper (#f5f4df), Radius: 0px, Padding: 0px.

## Do's

- Always use Midnight Ink (#0e1620) for primary text on light backgrounds and Cloud Whisper (#f5f4df) for text on dark/brand backgrounds to maintain high contrast (16.4:1 AAA on Cloud Whisper).
- Employ JobyDisplay for all headings and JobyText for body copy, adjusting letter-spacing per size: tighter for display text (-0.0300em) and slightly looser for body text (-0.0100em).
- Utilize Skybound Blue (#007ae5) as the primary background color for immersive sections, conveying the brand's core identity.
- Apply 16px border-radius to standard cards and 160px 160px 0px 0px for distinctive, flowing card shapes in prominent areas.
- Maintain a spacious layout with a consistent elementGap of 8px and a sectionGap of approximately 113px for clear content separation.
- Use Horizon Blue (#083e6f) as the border color for outlined ghost buttons on light backgrounds, ensuring brand-aligned interactivity.
- Integrate expressive motion with ease timing and 0.4s duration for transitions like transform, visibility, and opacity to enhance perceived responsiveness.

## Don'ts

- Avoid using highly saturated colors for large text blocks; reserve them for accents or backgrounds.
- Do not use box-shadows on elements not explicitly defined with one; maintain a generally flat aesthetic unless an element needs distinct visual elevation (like the Feature Card's rgba(0, 0, 0, 0.3) 0px 16px 47.6px 0px).
- Do not deviate from the established font families and their respective weights; consistency is key to brand recognition.
- Refrain from tight spacing between content blocks or elements; maintain the spacious feel with the established elementGap and sectionGap values.
- Do not use generic system font Arial unless it's for specific, small utility components where JobyText doesn't fit the specified size range.
- Avoid arbitrary border radii; stick to the defined 16px, 8px, 160px, or 147.6px values for visual consistency and brand recognition.
- Never use primary brand colors like Skybound Blue or Cosmic Violet for primary action text or borders. Interactivity for primary actions is conveyed through ghost buttons with specific text/border colors (e.g., Cloud Whisper or Horizon Blue).

## Layout

The page primarily utilizes a full-bleed layout, where background imagery and brand colors extend to the viewport edges, especially in the hero section. Content is typically centered within this full-bleed context. The hero section features a dramatic, large-scale image with a prominent, centered headline. Subsequent sections exhibit consistent vertical spacing, often switching between full-bleed brand color backgrounds (Skybound Blue) and white content areas. A loose, implicit grid is used for feature presentation, combining text and visuals. Navigation consists of a sticky top bar with minimal links.

## Imagery

The visual language predominantly features high-contrast, moody photography showcasing an individual looking out of an aircraft window at a city skyline, emphasizing aspiration and cutting-edge travel. Imagery is often full-bleed or large-scale, providing an immersive experience. Product shots are not explicitly shown but implied. Iconography is minimal and appears as stroke-based and monochromatic, consistent with the overall clean UI. Imagery serves a decorative and atmospheric role, setting the brand's aspirational tone rather than explaining specific features.

## Similar Brands

| Business | Why |
| --- | --- |
| Archer Aviation | Competitor in the advanced air mobility space, sharing a focus on aspirational imagery and high-tech feel. |
| Boom Supersonic | Similar high-contrast and sophisticated branding for futuristic travel with a focus on dark backgrounds and vibrant accents. |
| Airbus | Large-scale, aspirational imagery for a high-tech transportation company, with emphasis on clean layouts and minimal UI text. |
| Impossible Foods | Uses full-bleed, moody photography with large, impactful typography, creating an immersive brand experience. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #0e1620
background: #007ae5
border: #f5f4df
accent: #083e6f
primary action: #083e6f (outlined action border)

Example Component Prompts:
1. Create a hero section: full-bleed Skybound Blue (#007ae5) background, centered headline 'Skip traffic. Time to fly.' in JobyDisplay weight 550, size 80px, Cloud Whisper (#f5f4df) color, letter-spacing -0.03em. Max-width 1200px. Add a Ghost Navigation Button (Light Text) 'Investors' on the top right using JobyText weight 400, size 16px, transparent background, Cloud Whisper (#f5f4df) border and text.
2. Design a feature card: Background Skybound Blue (#007ae5), 16px border-radius, box-shadow rgba(0, 0, 0, 0.3) 0px 16px 47.6px 0px. Headline 'Technology that makes the dream possible' in JobyDisplay weight 500, size 24px, Cloud Whisper (#f5f4df). Body text 'Achieve seamless door to door travel with our innovative electric air taxi.' in jobyText weight 400, size 16px, Cloud Whisper (#f5f4df). No padding on card itself, content uses elementGap: 8px.
3. Implement a secondary navigation link: 'Discover the Experience' using jobyText weight 400, size 18px, Midnight Ink (#0e1620) text color, with a Horizon Blue (#083e6f) 1.5px solid border on hover, padding 15px top/right/bottom/left. Ensure base elementGap of 8px around it.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508128931-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508128931-thumb.jpg |
