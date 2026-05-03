# Bumble — Refero Style

- Refero URL: https://styles.refero.design/style/f32595cf-478e-4ccd-8722-0daffa693d76
- Site URL: https://bumble.com
- ID: f32595cf-478e-4ccd-8722-0daffa693d76
- Theme: light
- Industry: other
- Created: 2026-04-30T00:59:28.100Z
- Ranks: newest: 647, popular: 671, trending: 519

> sunny confident playground

## Description

Bumble's visual system evokes a playful confidence through its dominant bright yellow canvas and bold, heavy typography. Interaction is signaled by a shift from the signature brand yellow to crisp white and deep charcoal for actionable elements. Surfaces generally remain flat or minimally elevated with rounded corners, maintaining a light and open aesthetic that allows photographic content to take center stage.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Bumble Yellow | #ffdb5b | brand | Primary background for sections and cards, badge backgrounds, key brand accents that brighten the overall experience. This bright, vivid yellow is the most prominent color, defining the brand's energetic and inviting atmosphere |
| Amber Glow | #fff386 | brand | Subtle card backgrounds, adding a lighter, softer variation of the primary brand yellow |
| Charcoal Ink | #202020 | neutral | Primary text color for headlines and body. Also used for button backgrounds for critical actions, navigation borders, and icon fills, providing strong contrast against both white and yellow surfaces |
| Arctic White | #ffffff | neutral | Page backgrounds, card backgrounds, and button text on Charcoal Ink buttons. Provides clean, open space and strong contrast |
| Deep Gray | #3b3b3b | neutral | Secondary text color for descriptive body copy and subheadings, offering a slightly softer contrast than Charcoal Ink |
| Cloud Gray | #f3f3f3 | neutral | Subtle secondary card backgrounds, adding a faint visual separation from pure white without heavy contrast |
| Muted Stone | #343333 | neutral | Text color for badges and less prominent interface elements |
| Subtle Slate | #575656 | neutral | Helper text, navigation descriptions, and other subdued text elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| BumbleSans | system-ui, sans-serif | 400, 500, 600, 700 | 15px, 16px, 17px, 18px, 20px, 24px, 32px, 34px, 40px, 49px, 68px | 1.00, 1.10, 1.12, 1.18, 1.20, 1.25, 1.29, 1.33, 1.50 | Primary brand typeface. Its wide range of weights and sizes supports bold headlines and clear body text, establishing a confident and friendly tone. Letter spacing is slightly increased for smaller sizes and decreased for larger headlines. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 15 | 1.25 | 0.007 |
| subheading | 20 | 1.25 | 0.012 |
| heading-sm | 24 | 1.2 | 0.016 |
| heading | 32 | 1.18 | 0.018 |
| heading-lg | 49 | 1.1 | 0.02 |
| display | 68 | 1 | 0.02 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "badges": "1000px",
    "buttons": "16px",
    "navigation": "16px"
  },
  "elementGap": "24px",
  "sectionGap": "40px",
  "cardPadding": "40px",
  "pageMaxWidth": "224px"
}
```

## Components

### Primary Filled Button

**Role:** Call to action.

Background: Charcoal Ink (#202020), Text: Arctic White (#ffffff). Padding: 14px vertical, 24px horizontal. Radius: 16px or 25px (pill shape for prominent CTAs).

### Ghost Navigation Button

**Role:** Secondary navigation or interactive text.

Background: None, Text: Charcoal Ink (#202020). Padding: 14px vertical, 22px horizontal. Radius: 0px.

### Subtle Background Button

**Role:** Interactive elements with a softer visual presence.

Background: rgba(255, 255, 255, 0.8), Text: Subtle Slate (#575656). Padding: 12px vertical, 24px horizontal. Radius: 16px. Used for less prominent actions or filters.

### Yellow Feature Card

**Role:** Highlights key features or content areas.

Background: Bumble Yellow (#ffdb5b) or Amber Glow (#fff386). Radius: 9px or 24px. No box shadow. Padding varies by content, often 0px to allow content to dictate spacing.

### White Information Card

**Role:** Displays content on a neutral background.

Background: Arctic White (#ffffff) or Cloud Gray (#f3f3f3). Radius: 24px. No box shadow. Padding varies by content, often 0px to allow content to dictate spacing, occasionally 14px.

### Pill Badge

**Role:** Labels categories or attributes.

Background: Bumble Yellow (#ffdb5b), Text: Muted Stone (#343333). Padding: 20px vertical, 10px horizontal. Radius: 1000px (fully rounded).

## Do's

- Use Bumble Yellow (#ffdb5b) as the dominant background color for sections or cards to immediately establish brand identity.
- Apply Charcoal Ink (#202020) for all primary body text and headlines to ensure high contrast and readability.
- Prefer large type sizes (e.g., 68px, 49px) and heavier weights (500, 600, 700) for headlines with the BumbleSans typeface.
- Utilize 16px and 24px border radii for buttons and cards respectively, creating a soft, approachable feel.
- Ensure generous internal padding for interactive elements; buttons typically use 14px vertical and 24px horizontal padding.
- Maintain minimal elevation; shadows should be subtle, such as rgba(32, 32, 32, 0.12) 0px 1px 8px 0px, predominantly for cards.

## Don'ts

- Avoid using highly saturated colors other than Bumble Yellow or Amber Glow for major interface elements.
- Do not introduce strong, complex shadows, as the system favors a flatter, lighter aesthetic.
- Refrain from using thin body text weights that would visually conflict with the bold headline style.
- Do not deviate from the established rounded border radii for components; sharp corners are not part of this system.
- Avoid tight spacing around content; allow generous element and section gaps (e.g., 24px, 40px) to maintain an open feel.
- Do not use dark backgrounds for full sections unless a specific pattern (like the hero) dictates it, and even then, ensure a vibrant yellow accent or white text provides strong contrast.

## Layout

The page primarily employs a max-width contained layout, approximately 224px wide, centered on the screen, though the hero section breaks this constraint. The hero features a full-bleed vibrant Bumble Yellow background with large, centered brand typography and overlapping, angled photographic cards showcasing user profiles, creating a dynamic introduction. Subsequent sections alternate between vibrant yellow and clean white backgrounds, providing clear visual breaks. Content is often arranged in prominent centered stacks or two-column text-left/visual-right patterns. Navigation is handled by a sticky top bar with subtle ghost buttons and a prominent brand logo.

## Imagery

The site uses a mix of candid, lifestyle photography and product screenshots. Photography often features diverse individuals in engaging, active, and social scenarios, cropped and presented in a natural, unedited style within the UI. Product screenshots highlight the app interface directly, often placed within stylized device mockups or integrated into compositional elements like stacked, angled cards. Images are primarily contained within rounded card-like shapes or as background elements. Icons, though minimal, appear to be filled and monochrome, leveraging Charcoal Ink on Bumble Yellow.

## Similar Brands

| Business | Why |
| --- | --- |
| Tinder | Dominant brand color for backgrounds that creates an energetic feel, bold typography, and a card-based UI for profiles. |
| Netflix | Strong brand color dominance across the interface, with clear, high-contrast typography, and visually driven content cards. |
| Spotify | Heavy emphasis on a vibrant brand color mixed with dark neutrals, custom typography for headlines, and a focus on visual content in grids. |
| Headspace | Playful color palette, custom friendly typography, and liberal use of rounded corners for UI elements and illustrations. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #202020
- background: #ffdb5b
- border: #202020 (often rgba(32, 32, 32, 0.12) for borders with transparency)
- accent: #ffdb5b
- primary action: #202020 (filled action)

Example Component Prompts:
1. Create a large hero banner with a Bumble Yellow (#ffdb5b) background. Include a large headline 'Existimos para acercar a las personas al amor.' using BumbleSans, weight 700, size 68px, Charcoal Ink (#202020). Below it, add a primary action button 'Descargar Bumble' with Charcoal Ink (#202020) background, Arctic White (#ffffff) text, 14px vertical and 24px horizontal padding, and 25px radius.
2. Design a feature card: Use Amber Glow (#fff386) background with 24px border-radius. Inside, place a heading 'Bumble Date' in BumbleSans, weight 600, size 32px, Deep Gray (#3b3b3b). Include a body paragraph in BumbleSans, weight 400, size 16px, Subtle Slate (#575656).
3. Create a navigation item 'Seguridad': Use an Arctic White (#ffffff) background with 16px border-radius, Padding: 12px vertical, 24px horizontal. Text: Charcoal Ink (#202020) at BumbleSans, weight 500, size 17px. Ensure elementGap of 24px between items.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510742504-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510742504-thumb.jpg |
